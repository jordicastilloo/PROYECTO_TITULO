<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\RutinaForm;
use Illuminate\Http\Request;
use DB;
use App\Rutina;
use App\Contiene;

class RutinaController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{
		//
		return view("admin.rutinas.inicio")->with('rutinas', \App\Rutina::paginate(2)->setPath('rutinas'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
				return view('admin.rutinas.createUpdate');

	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(RutinaForm $request)
	{
		//
		$rutinas = new \App\Rutina;
		$rutinas->nombre_rutina = \Request::input('nombre_rutina');
		$rutinas->desc_rutina= \Request::input('desc_rutina');
		$rutinas->rut_cl= \Request::input('rut_cl');
		$rutinas->rut_p= \Request::input('rut_p');
		$rutinas->save();

    return redirect('rutinas/create')->with('message', 'Post saved');


    //return redirect()->action('EjerciciosController@index');

	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id_rutina)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id_rutina, RutinaForm $rutinasForm)
	{
		//
		$rutinas = \App\Rutina::find($id_rutina);
 
 		$rutinas->nombre_rutina = \Request::input('nombre_rutina');
 
  		$rutinas->desc_rutina = \Request::input('desc_rutina');


 		//$rutinas->rut_cl = \Request::input('clasificacion');
 
 		$rutinas->save();
 
 		return redirect()->route('rutinas.edit', ['post' => $id_rutina])->with('message', 'Ejercicio updated');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id_rutina)
	{
		//
		$rutinas = \App\Rutina::find($id_rutina);
 
 		$rutinas->delete();
 
 		return redirect()->route('rutinas.index')->with('message', 'Rutina deleted');
	}





}
