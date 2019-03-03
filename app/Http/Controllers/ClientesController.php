<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\ClientesForm;
use Illuminate\Http\Request;
use App\Clientes;
use App\Progreso;
use DB;

class ClientesController extends Controller {
	/*public function __construct()
	{
		$this->middleware('auth');
	}*/
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{
		//
		//$clientes = Clientes::search($request->name)->orderBy('rut_cl','DESC')->paginate(5);

		$clientes = Clientes::search($request->name)->type($request->get('estado'))->orderBy('rut_cl','DESC')->paginate(5);

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
		return view('admin.clientes.crear');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(ClientesForm $request)
	{
		$clientes = new \App\clientes;
		$clientes->rut_cl = \Request::input('rut');
		$clientes->nombre_cliente = \Request::input('nombre');
		$clientes->ap_pat_cliente = \Request::input('ap_pat');
		$clientes->ap_mat_cliente = \Request::input('ap_mat');
		$clientes->direccion_cliente = \Request::input('direccion');
		$clientes->telefono_cliente = \Request::input('telefono');
		$clientes->email_cliente = \Request::input('email');
		$clientes->huella_cliente = 0;
		$clientes->contrasena_cliente = \Hash::make(\Request::input('contraseña'));
		$clientes->nacionalidad_cliente = \Request::input('nacionalidad');
		$clientes->fecha_nac_cliente = \Request::input('fecha');
		$clientes->sexo_cliente = \Request::input('sexo');
		$clientes->alergia_cliente = \Request::input('alergia');
		$clientes->patologia_cliente = \Request::input('patologia');
		$clientes->fotografia_cliente = 0;
		$clientes->estado = 1;
		$clientes->save();

    return redirect('clientes')->with('message', 'Cliente saved');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($rut_cl)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($rut_cl)
	{
		//
		return view('admin.clientes.createUpdate')->with('clientes', \App\Clientes::find($rut_cl));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($rut_cl,ClientesForm $clientesForm)
	{
		//
		$clientes = \App\Clientes::find($rut_cl);
 
		$clientes->nombre_cliente = \Request::input('nombre');
		$clientes->ap_pat_cliente = \Request::input('ap_pat');
		$clientes->ap_mat_cliente = \Request::input('ap_mat');
		$clientes->direccion_cliente = \Request::input('direccion');
		$clientes->telefono_cliente = \Request::input('telefono');
		$clientes->email_cliente = \Request::input('email');
		$clientes->contrasena_cliente = \Hash::make(\Request::input('contraseña'));
		$clientes->nacionalidad_cliente = \Request::input('nacionalidad');
		$clientes->fecha_nac_cliente = \Request::input('fecha');
		$clientes->sexo_cliente = \Request::input('sexo');
		$clientes->alergia_cliente = \Request::input('alergia');
		$clientes->patologia_cliente = \Request::input('patologia');

 
 		$clientes->save();
 
 		return redirect()->route('clientes.edit', ['post' => $rut_cl])->with('message', 'Cliente updated');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($rut_cl)
	{
		//
		$clientes= \App\Clientes::find($rut_cl);
 
 		$clientes->delete();
 
 		return redirect()->route('clientes.index')->with('message', 'Clientes deleted');
	}



	
     public function EditarForm(){
     	return view('admin.clientes.inicio');
     }


     public function EditaraInactivo(Request $request){
     	$rut = $request->input('rut_cliente_dejar_activo');
     	


     	/*
     	DB::table('clientes')->update(['estado'=>0]);
     	echo "Estado editado";*/

     	
     	DB::table('clientes')
        ->where('rut_cl', $rut)
        ->update(['estado' => 0]);


        return redirect()->action('ClientesController@index');

      }


      public function EditaraActivo(Request $request){
     	$rut = $request->input('rut_cliente');
     	


     	/*
     	DB::table('clientes')->update(['estado'=>0]);
     	echo "Estado editado";*/

     	
     	DB::table('clientes')
        ->where('rut_cl', $rut)
        ->update(['estado' => 1]);

        return redirect()->action('ClientesController@index');

      }

}
