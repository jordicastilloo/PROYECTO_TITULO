<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\Plan_nutricionalForm;
use Illuminate\Http\Request;

class Plan_nutricionalController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		return view("admin.iplan_nutricional.inicio")->with('plan_nutricional', \App\Plan_nutricional::paginate(2)->setPath('plan_nutricional'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		return view("admin.plan_nutricional.createUpdate");
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
		$plan_nutricional = new \App\plan_nutricional;
		$plan_nutricional->nombre_plan_nut = \Request::input('nombre_plan_nut');
		$plan_nutricional->descripcion_plan_nut= \Request::input('descripcion_plan_nut');
		$plan_nutricional->personal_rut_p = \Request::input('personal_rut_p');
		$plan_nutricional->clientes_rut_cliente = \Request::input('clientes_rut_cliente');
		$plan_nutricional->save();

    return redirect('plan_nutricional/create')->with('message', 'Post saved');
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
	public function edit($id_plan_nut)
	{
		//
		return view('admin.plan_nutricional.createUpdate')->with('plan_nutricional', \App\Plan_nutricional::find($id_plan_nut));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id_plan_nut, Plan_nutricionalForm $plan_nutricionalForm)
	{
		//
		$plan_nutricional = \App\Plan_nutricional::find($id_plan_nut);
 
 		$plan_nutricional->nombre_plan_nut = \Request::input('nombre_plan_nut');
 
  		$plan_nutricional->descripcion_plan_nut = \Request::input('descripcion_plan_nut');

 		$plan_nutricional->personal_rut_p= \Request::input('personal_rut_p');

 		$plan_nutricional->clientes_rut_cliente = \Request::input('clientes_rut_cliente');
 
 		$plan_nutricional->save();
 
 		return redirect()->route('plan_nutricional.edit', ['post' => $id_plan_nut])->with('message', 'Post updated');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id_plan_nut)
	{
		//
		$plan_nutricional = \App\Plan_nutricional::find($id_plan_nut);
 
 		$plan_nutricional->delete();
 
 		return redirect()->route('plan_nutricional.index')->with('message', 'Implemento deleted');
	}

}
