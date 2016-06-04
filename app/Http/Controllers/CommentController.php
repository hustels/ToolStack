<?php

namespace App\Http\Controllers;
use App\Comment;
use Illuminate\Http\Request;

use App\Http\Requests;

class CommentController extends Controller
{
	public function __construct()
    {
        $this->middleware('web');
        $this->middleware('auth');
    } 
    public function index()
    {
    	return view('pages.app.comments.create');
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
    		\Session::flash('created', 'Añadido correctamente!');
    		//return 'Created successfuly';
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
        return Comment::all();
    }


}
