<?php

namespace App\Http\Controllers;
use App\Comment;
use Illuminate\Http\Request;
use App\Events\CommentWasCreated;
use App\Http\Requests;
\Carbon\Carbon::setLocale('es');

class CommentController extends Controller
{
	public function __construct()
    {
        $this->middleware('web');
        $this->middleware('auth');
    } 
    public function index()
    {
        //$data = 'Se ha creado un nuevo comentario';
        //event (new CommentWasCreated($data));
        $comments = Comment::all();
    	return view('pages.app.comments.create' , compact('comments'));
    }
    public function add(Request $request)
    {
    	// Add comment
    	  $this->validate($request, [
          'title' => 'required',
          'description' => 'required',

        ]);

    	$comment = new Comment;
    	$comment->title = $request->input('title');
    	$comment->description = $request->input('description');
    	$comment->owner = \Auth::user()->email;
    	if($comment->save())
    	{
            $data = 'Se ha creado un nuevo comentario';
    		\Session::flash('created', 'Añadido correctamente!');
    		//return 'Created successfuly';
            event (new CommentWasCreated($data));
    		return redirect()->back();

    		

    	}
    }

    // Remove comment
    public function remove(Request $request)
    {
        if(Comment::destroy($request->input('id')))
        {
             //\Session::flash('destroyed', 'El comentario ha sido borrado!');
            //return 'Created successfuly';
            return 'Removed';
        }
    }

    // Get all comments for the view
    public function all()
    {

        $users = \DB::table('comments')
                ->orderBy('updated_at', 'desc')
                ->get();
        return $users;
    }

    // Get unread comments
    public function unread()
    {
        return \DB::table('comments')->where('isread' , false)->count();
    }
    // Mark a comment as read
    public function read(Request $request)
    {
        $comment = Comment::find($request->input('id'));
        $comment->isread = true;
        if($comment->save())
        {
            return 'The comment was read';
        }
    }


}
