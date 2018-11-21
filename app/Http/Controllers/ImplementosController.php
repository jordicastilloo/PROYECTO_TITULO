<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\ImplementosForm;
use Illuminate\Http\Request;
use App\Http\Request\ImplementosRequest;
use App\Implementos;

class ImplementosController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{


		$implementos = Implementos::search($request->name)->orderBy('id_implemento','DESC')->paginate(5);

		return view('admin.implementos.inicio')->with('implementos',$implementos);


        /*
		return view("implementos.inicio")->with('implementos', \App\Implementos::paginate(2)->setPath('implementos'));*/
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view("admin.implementos.createUpdate");
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{

		$implementos = new \App\implementos;
		$implementos->nombre = \Request::input('nombre');
		$implementos->estado = \Request::input('estado');
		$implementos->tipo = \Request::input('tipo');
		$implementos->stock = \Request::input('stock');
		$implementos->save();

    return redirect('implementos/create')->with('message', 'Post saved');
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
	public function edit($id_implemento)
	{
		return view('admin.implementos.createUpdate')->with('implementos', \App\Implementos::find($id_implemento));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id_implemento, ImplementosForm $implementosForm)
	{
 		$implementos = \App\Implementos::find($id_implemento);
 
 		$implementos->nombre = \Request::input('nombre');
 
  		$implementos->estado = \Request::input('estado');

 		$implementos->tipo = \Request::input('tipo');

 		$implementos->stock = \Request::input('stock');
 
 		$implementos->save();
 
 		return redirect()->route('implementos.edit', ['post' => $id_implemento])->with('message', 'Post updated');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id_implemento)
	{
		$implementos = \App\Implementos::find($id_implemento);
 
 		$implementos->delete();
 
 		return redirect()->route('implementos.index')->with('message', 'Implemento deleted');	
 	}

}
