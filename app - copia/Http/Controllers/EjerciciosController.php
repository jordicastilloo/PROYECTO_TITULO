<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\EjerciciosForm;
use Illuminate\Http\Request;

class EjerciciosController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		return view("admin.ejercicios.inicio")->with('ejercicios', \App\Ejercicios::paginate(2)->setPath('ejercicios'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		return view("admin.ejercicios.createUpdate");
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
		$ejercicios = new \App\ejercicios;
		$ejercicios->nombre = \Request::input('nombre');
		$ejercicios->fotografia= \Request::input('fotografia');
		$ejercicios->video = \Request::input('video');
		$ejercicios->descripcion= \Request::input('descripcion');
		$ejercicios->clasificacion= \Request::input('clasificacion');
		$ejercicios->tipo= \Request::input('tipo');
		$ejercicios->save();

    return redirect('ejercicios/create')->with('message', 'Post saved');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id_ejercicio)
	{
		//
		return view('admin.ejercicios.createUpdate')->with('ejercicios', \App\Ejercicios::find($id_ejercicio));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id_ejercicio, EjerciciosForm $ejerciciosForm)
	{
		//
		$ejercicios = \App\Implementos::find($id_implemento);
 
 		$ejercicios->nombre = \Request::input('nombre');
 
  		$ejercicios->fotografia = \Request::input('fotografia');

 		$ejercicios->video = \Request::input('video');

 		$ejercicios->descripcion = \Request::input('descripcion');

 		$ejercicios->clasificacion = \Request::input('clasificacion');

 		$ejercicios->tipo = \Request::input('tipo');
 
 		$ejercicios->save();
 
 		return redirect()->route('ejercicios.edit', ['post' => $id_ejercicio])->with('message', 'Ejercicio updated');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id_ejercicio)
	{
		//
		$ejercicios = \App\Ejercicios::find($id_ejercicio);
 
 		$ejercicios->delete();
 
 		return redirect()->route('ejercicios.index')->with('message', 'Ejercicio deleted');
	}

}
