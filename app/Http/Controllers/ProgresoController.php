<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProgresoForm;
use Illuminate\Http\Request;

class ProgresoController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		return view("admin.progreso.inicio")->with('progreso', \App\Progreso::paginate(2)->setPath('progreso'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		return view("admin.progreso.createUpdate");
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
		$progreso = new \App\progreso;
		$progreso->peso_corporal = \Request::input('peso_corporal');
		$progreso->estatura = \Request::input('estatura');
		$progreso->subescapular = \Request::input('subescapular');
		$progreso->tricipital = \Request::input('tricipital');
		$progreso->bicipital = \Request::input('bicipital');
		$progreso->supra_iliaco = \Request::input('supra_iliaco');
		$progreso->hombros = \Request::input('hombros');
		$progreso->pecho = \Request::input('pecho');
		$progreso->biceps_relajado = \Request::input('biceps_relajado');
		$progreso->biceps_contraido = \Request::input('biceps_contraido');
		$progreso->muneca = \Request::input('muneca');
		$progreso->cintura = \Request::input('cintura');
		$progreso->cadera = \Request::input('cadera');
		$progreso->muslo = \Request::input('muslo');
		$progreso->gemelo = \Request::input('gemelo');
		$progreso->fecha_evaluacion = date("Y-m-d");
		//\Request::input('fecha_evaluacion');
		$progreso->rut_cl = \Request::input('rut_cl');
		$progreso->save();

    return redirect('progreso/create')->with('message', 'Progreso saved');
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
	public function edit($id_progreso)
	{
		//
		return view('admin.progreso.createUpdate')->with('progreso', \App\Progreso::find($id_progreso));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id_progreso, ProgresoForm $progresoForm)
	{
		//

		$progreso = \App\Progreso::find($id_progreso);
 		$progreso->peso_corporal = \Request::input('peso_corporal');
		$progreso->estatura = \Request::input('estatura');
		$progreso->subescapular = \Request::input('subescapular');
		$progreso->tricipital = \Request::input('tricipital');
		$progreso->bicipital = \Request::input('bicipital');
		$progreso->supra_iliaco = \Request::input('supra_iliaco');
		$progreso->hombros = \Request::input('hombros');
		$progreso->pecho = \Request::input('pecho');
		$progreso->biceps_relajado = \Request::input('biceps_relajado');
		$progreso->biceps_contraido = \Request::input('biceps_contraido');
		$progreso->muneca = \Request::input('muneca');
		$progreso->cintura = \Request::input('cintura');
		$progreso->cadera = \Request::input('cadera');
		$progreso->muslo = \Request::input('muslo');
		$progreso->gemelo = \Request::input('gemelo');
		$progreso->fecha_evaluacion = \Request::input('fecha_evaluacion');
		$progreso->clientes_rut_cliente = \Request::input('clientes_rut_cliente');
 
 		$progreso->save();
 
 		return redirect()->route('progreso.edit', ['post' => $id_progreso])->with('message', 'Progreso updated');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id_progreso)
	{
		//
		$progreso = \App\Progreso::find($id_progreso);
 
 		$progreso->delete();
 
 		return redirect()->route('progreso.index')->with('message', 'Implemento deleted');
	}

}
