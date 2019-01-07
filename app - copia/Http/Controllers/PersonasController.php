<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\PersonasForm;
use Illuminate\Http\Request;

class PersonasController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
			return view("admin.personas.inicio")->with('personas', \App\Personas::paginate(2)->setPath('personas'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		return view('admin.personas.createUpdate');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
		$personas = new \App\personas;
		$personas->RutPersona = \Request::input('RutPersona');
		$personas->Nombre = \Request::input('Nombre');
		$personas->Apellido_Materno = \Request::input('Apellido_Materno');
		$personas->Apellido_Paterno = \Request::input('Apellido_Paterno');
	    $personas->Telefono = \Request::input('Telefono');
		$personas->Email = \Request::input('Email');
		$personas->Tipo = \Request::input('Tipo');
		$personas->Huella = \Request::input('Huella');
		$personas->Nacionalidad = \Request::input('Nacionalidad');
		$personas->Fecha_nacimiento = \Request::input('Fecha_nacimiento');
		$personas->Sexo = \Request::input('Sexo');
		$personas->Alergico = \Request::input('Alergico');
		$personas->Patologia = \Request::input('Patologia');
		$personas->Fotografia = \Request::input('Fotografia');
		$personas->save();

    return redirect('personas/create')->with('message', 'Post saved');
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
	public function edit($RutPersona)
	{
		//
	    return view('admin.personas.createUpdate')->with('personas', \App\Personas::find($RutPersona));

	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($RutPersona,PersonasForm $personasForm)
	{
		//
		$personas = \App\Personas::find($RutPersona);
 
 		$personas->Nombre = \Request::input('Nombre');
 
  		$personas->Apellido_Materno = \Request::input('Apellido_Materno');

 		$personas->Apellido_Paterno = \Request::input('Apellido_Paterno');

 		$personas->Telefono = \Request::input('Telefono');

 		$personas->Email = \Request::input('Email');

 		$personas->Tipo = \Request::input('Tipo');

 		$personas->Huella = \Request::input('Huella');

 		$personas->Nacionalidad = \Request::input('Nacionalidad');

 		$personas->Fecha_nacimiento = \Request::input('Fecha_nacimiento');

 		$personas->Sexo = \Request::input('Sexo');

 		$personas->Alergico = \Request::input('Alergico');

 		$personas->Patologia = \Request::input('Patologia');

 		$personas->Fotografia = \Request::input('Fotografia');
 
 		$personas->save();
 
 		return redirect()->route('personas.edit', ['post' => $RutPersona])->with('message', 'Post updated');
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($RutPersona)
	{
		//
		$personas= \App\Personas::find($RutPersona);
 
 		$personas->delete();
 
 		return redirect()->route('personas.index')->with('message', 'Persona deleted');
		
	}

}
