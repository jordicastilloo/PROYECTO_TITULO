<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\ReservaForm;
use Illuminate\Http\Request;

class ReservaController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		return view("admin.reserva.inicio")->with('reserva', \App\Reserva::paginate(2)->setPath('reserva'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		return view("admin.reserva.createUpdate");
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
		$reserva = new \App\reserva;
		$reserva->hora_inicio = \Request::input('hora_inicio');
		$reserva->hora_fin = \Request::input('hora_fin');
		$reserva->fecha = \Request::input('fecha');
		$reserva->clientes_rut_cliente = \Request::input('clientes_rut_cliente');
	    $reserva->personal_rut_p = \Request::input('personal_rut_p');
		$reserva->save();

    return redirect('reserva/create')->with('message', 'Post saved');
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
	public function edit($id_reserva)
	{
		//
		return view('admin.reserva.createUpdate')->with('reserva', \App\Reserva::find($id_reserva));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id_reserva,ReservaForm $reservaForm)
	{
		//
		$reserva = \App\Reserva::find($id_reserva);
 
 		$reserva->hora_inicio = \Request::input('hora_inicio');
 
  		$reserva->hora_fin = \Request::input('hora_fin');

 		$reserva->fecha = \Request::input('fecha');

 		$reserva->clientes_rut_cliente = \Request::input('clientes_rut_cliente');

 		$reserva->personal_rut_p = \Request::input('personal_rut_p');
 
 		$reserva->save();
 
 		return redirect()->route('implementos.edit', ['post' => $id_implemento])->with('message', 'Post updated');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id_reserva)
	{
		//
		$reserva = \App\Reserva::find($id_reserva);
 
 		$reserva->delete();
 
 		return redirect()->route('reserva.index')->with('message', 'Implemento deleted');
	}

}
