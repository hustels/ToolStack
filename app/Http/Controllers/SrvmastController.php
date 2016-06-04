<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Srvmast;
use App\Http\Requests;

class SrvmastController extends Controller
{
  
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
    	return Srvmast::all();
    }

    public function show()
    {
    	return view('pages.report.srvmast');
    }

    // Se encarga de realizar todas operaciones de (crear , borrar , actualizar )
    public function handle(Request $request)
    {
      /**
       * La operaciones que se quiere realizar
       (add , del , edit)
       */
       $operation = $request->input('oper');
      /**
       * Validar los campos
       */
       if($operation == 'edit'  || $operation == 'add')
       {
         $this->validate($request, [
          'date' => 'required',
          'session' => 'required',
          'specification' => 'required',
          'type' => 'required',
          'retried' => 'required'

        ]);
       }

      if($operation == 'add')
      {
        if(Srvmast::create($request->all()))
        {
          return redirect()->back();
        }

      }
      if($operation == 'edit')
      {
        $report = Srvmast::find($request->input('id'));
        $report->date = $request->input('date');
      	$report->session = $request->input('session');
      	$report->host = $request->input('host');
      	$report->type = $request->input('type');
      	$report->specification = $request->input('specification');
      	$report->new_session = $request->input('new_session');
      	$report->retried = $request->input('retried');
      	$report->end_ok = $request->input('end_ok');
      	$report->observations = $request->input('observations');
      	$report->incident = $request->input('incident');
      	$report->link = $request->input('link');
      	if($report->save())
        {
          return 'Updated';
        }
      }

      if($operation == 'del')
      {

        if(Srvmast::destroy($request->input('id')))
        {
        return 'Deleted';
        }

      }


    }
}
