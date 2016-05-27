<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Oracle;

class OracleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
    	return Oracle::all();
    }
    public function show()
    {
    	return view('pages.report.oracle');
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
	      // Validate
	       $this->validate($request, [
	        'db' => 'required',
	        'host' => 'required',
	        'type' => 'required',
	        'last_bk' => 'required',
	        'num_failed_bk' => 'required',
	        'status' => 'required',
	        
	      ]);
       }

      if($operation == 'add')
      {
        if(Oracle::create($request->all()))
        {
          return redirect()->back();
        }

      }
      if($operation == 'edit')
      {
        $report = Oracle::find($request->input('id'));
       $report->date = $request->input('date');
       $report->db = $request->input('db');
       $report->host = $request->input('host');
       $report->type = $request->input('type');
       $report->last_bk = $request->input('last_bk');
       $report->num_failed_bk = $request->input('num_failed_bk');
       $report->retried = $request->input('retried');
       $report->status = $request->input('status');
       $report->observation = $request->input('observation');
        if($report->save())
        {
          return 'Updated';
        }
      }

      if($operation == 'del')
      {

        if(Oracle::destroy($request->input('id')))
        {
        return 'Deleted';
        }

      }


    }
}
