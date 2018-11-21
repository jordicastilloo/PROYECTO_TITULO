<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\PlanesForm;
use Illuminate\Http\Request;
use App\Planes;


class PlanesController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{
		//
		$planes = Planes::search($request->name)->orderBy('id_plan','DESC')->paginate(5);

		return view ('admin.planes.inicio')->with('planes',$planes);



		//return view("admin.planes.inicio")->with('planes', \App\Planes::paginate(2)->setPath('planes'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		return view("admin.planes.createUpdate");
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
		$planes = new \App\planes;
		$planes->nombre_plan = \Request::input('nombre_plan');
		$planes->precio_plan = \Request::input('precio_plan');
		$planes->save();

    return redirect('planes/create')->with('message', 'Planes saved');
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
	public function edit($id_plan)
	{
		//
		return view('admin.planes.createUpdate')->with('planes', \App\Planes::find($id_plan));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id_plan, PlanesForm $planesForm)
	{
		//
		$planes = \App\Planes::find($id_plan);
 
 		$planes->nombre_plan = \Request::input('nombre_plan');
 
  		$planes->precio_plan = \Request::input('precio_plan');
 
 		$planes->save();
 
 		return redirect()->route('planes.edit', ['post' => $id_plan])->with('message', 'Plan updated');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id_plan)
	{
		//
		$planes = \App\Planes::find($id_plan);
 
 		$planes->delete();
 
 		return redirect()->route('planes.index')->with('message', 'Plan deleted');
	}

}
