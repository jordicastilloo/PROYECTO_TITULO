<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\ContieneForm;
use Illuminate\Http\Request;
use App\Rutina;
use App\Contiene;
use App\Ejercicios;




class ContieneController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{
		
		$contiene = Contiene::search($request->id_cont)->orderBy('id_cont','DESC')->paginate(5);

		
		$contiene = Contiene::search($request->name)
		->leftjoin('rutinas','contienes.id_rutina','=','rutinas.id_rutina')
		->select('contienes.*','rutinas.nombre_rutina as rutins')
		->paginate(5);

		return view ('admin.contiene.inicio')->with('contiene',$contiene);


		
		

	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		
		

		$rutinas = Rutina::lists('nombre_rutina','id_rutina');



		$ejercicios = Ejercicios::lists('nombre','id_ejercicio');


		return view('admin.contiene.createUpdate',compact('rutinas','ejercicios'));


		

	    //return view('admin.contiene.createUpdate');

	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		//
		/*
		$contiene = new \App\contiene;
		$contiene->id_rutina = \Request::input('id_rutina');
		$contiene->id_ejercicio = \Request::input('id_ejercicio');
		$contiene->save();*/

		Contiene::create($request->all());


    return redirect('contiene/create')->with('message', 'Post saved');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id_cont)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id_cont)
	{
		//
	    return view('admin.contiene.createUpdate')->with('contiene', \App\Contiene::find($id_cont));

	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id_cont)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id_cont)
	{
		//
		$contiene = \App\Contiene::find($id_cont);
 
 		$contiene->delete();
 
 		return redirect()->route('contiene.index')->with('message', 'Implemento deleted');
	}

}
