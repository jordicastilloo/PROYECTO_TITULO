<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\ClientesForm;
use Illuminate\Http\Request;
use App\Clientes;
class ClientesController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{
		//
		$clientes = Clientes::search($request->name)->orderBy('rut_cliente','DESC')->paginate(5);

            return view ('admin.clientes.inicio')->with('clientes',$clientes);



		//return view("admin.clientes.inicio")->with('clientes', \App\Clientes::paginate(2)->setPath('clientes'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		return view('admin.clientes.createUpdate');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
		$clientes = new \App\clientes;
		$clientes->rut_cliente = \Request::input('rut_cliente');
		$clientes->nombre_cliente = \Request::input('nombre_cliente');
		$clientes->ap_pat_cliente = \Request::input('ap_pat_cliente');
		$clientes->ap_mat_cliente = \Request::input('ap_mat_cliente');
	    $clientes->telefono_cliente = \Request::input('telefono_cliente');
		$clientes->email_cliente = \Request::input('email_cliente');
		$clientes->huella_cliente = \Request::input('huella_cliente');
		$clientes->contrasena_cliente = \Request::input('contrasena_cliente');
		$clientes->nacionalidad_cliente = \Request::input('nacionalidad_cliente');
		$clientes->fecha_nac_cliente = \Request::input('fecha_nac_cliente');
		$clientes->sexo_cliente = \Request::input('sexo_cliente');
		$clientes->alergia_cliente = \Request::input('alergia_cliente');
		$clientes->patologia_cliente = \Request::input('patologia_cliente');
		$clientes->fotografia_cliente = \Request::input('fotografia_cliente');
		$clientes->empresa_id_emp = 1000;
		$clientes->contrata_id_insc = \Request::input('contrata_id_insc');
		$clientes->save();

		//obtenemos el campo file definido en el formulario
       $file = $request->file('file');
 
       //obtenemos el nombre del archivo
       $nombre = $file->getClientOriginalName();
 
       //indicamos que queremos guardar un nuevo archivo en el disco local
       \Storage::disk('local')->put($nombre,  \File::get($file));
 

    return redirect('clientes/create')->with('message', 'Post saved');
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
	public function edit($rut_cliente)
	{
		//
		return view('admin.clientes.createUpdate')->with('clientes', \App\Clientes::find($rut_cliente));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($rut_cliente,ClientesForm $clientesForm)
	{
		//
		$clientes = \App\Clientes::find($rut_cliente);
 
 		$clientes->nombre_cliente = \Request::input('nombre_cliente');
 
  		$clientes->ap_pat_cliente = \Request::input('ap_pat_cliente');

 		$clientes->ap_mat_cliente = \Request::input('ap_mat_cliente');

 		$clientes->telefono_cliente = \Request::input('telefono_cliente');

 		$clientes->email_cliente = \Request::input('email_cliente');

 		$clientes->huella_cliente = \Request::input('huella_cliente');

 		$clientes->contrasena_cliente = \Request::input('contrasena_cliente');

 		$clientes->nacionalidad_cliente = \Request::input('nacionalidad_cliente');

 		$clientes->fecha_nac_cliente = \Request::input('fecha_nac_cliente');

 		$clientes->sexo_cliente = \Request::input('sexo_cliente');


 		$clientes->alergia_cliente = \Request::input('alergia_cliente');

 		$clientes->patologia_cliente = \Request::input('patologia_cliente');

 		$clientes->fotografia_cliente = \Request::input('fotografia_cliente');


 		$clientes->contrata_id_insc = \Request::input('contrata_id_insc');

 
 		$clientes->save();
 
 		return redirect()->route('clientes.edit', ['post' => $rut_cliente])->with('message', 'Personal updated');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($rut_cliente)
	{
		//
		$clientes= \App\Clientes::find($rut_cliente);
 
 		$clientes->delete();
 
 		return redirect()->route('clientes.index')->with('message', 'Clientes deleted');
	}

}
