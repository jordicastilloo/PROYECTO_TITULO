<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\ClasesForm;
use Illuminate\Http\Request;
use App\Http\Request\ClasesRequest;
use App\Clases;

class ClasesController extends Controller {
	public function __construct()
	{
		$this->middleware('auth');
	}
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{
		//
		$clases = Clases::search($request->name)->orderBy('id_clase','DESC')->paginate(5);

		return view ('admin.clases.inicio')->with('clases',$clases);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		return view('admin.clases.createUpdate');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
		$clases = new \App\clases;
		$clases->nombre_clase = \Request::input('nombre_clase');
		$clases->descripcion_clase = \Request::input('descripcion_clase');
		$clases->hora_inicio = \Request::input('hora_inicio');
		$clases->hora_fin = \Request::input('hora_fin');
		$clases->id_emp = 1;
		$clases->save();

    return redirect('clases/create')->with('message', 'Post saved');
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
	public function edit($id_clase)
	{
		//
		return view('admin.clases.createUpdate')->with('clases', \App\Clases::find($id_clase));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id_clase,ClasesForm $clasesForm)
	{
		//
		$clases = \App\Clases::find($id_clase);
 
 		$clases->nombre_clase = \Request::input('nombre_clase');

 		$clases->descripcion_clase = \Request::input('descripcion_clase');
 
  		$clases->hora_inicio = \Request::input('hora_inicio');

 		$clases->hora_fin = \Request::input('hora_fin');

 		//$clases->empresa_id_emp = \Request::input('empresa_id_emp');
 
 		$clases->save();
 
 		return redirect()->route('clases.edit', ['post' => $id_clase])->with('message', 'Clases updated');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id_clase)
	{
		//
		$clases = \App\Clases::find($id_clase);
 
 		$clases->delete();
 
 		return redirect()->route('clases.index')->with('message', 'Implemento deleted');
	}

}
