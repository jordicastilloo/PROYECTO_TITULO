<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\PersonalForm;
use Illuminate\Http\Request;
use App\Personal;
use App\Http\Request\PersonalRequest;
use Illuminate\Support\Facades\DB;



class PersonalController extends Controller {
	/*
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


           // $personal = Personal::search($request->name)->orderBy('rut_p','DESC')->paginate(5);

		    $personal = Personal::search($request->name)->type($request->get('tipo_p'))->orderBy('rut_p','DESC')->paginate(5);

            return view ('admin.personal.inicio')->with('personal',$personal);

			

			//return view("admin.personal.inicio")->with('personal', \App\Personal::paginate(2)->setPath('personal'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		return view('admin.personal.createUpdate');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//

		//
		$contra = \Request::input('rut_p');
		$nombresito = \Request::input('nombre');
		$personal = new \App\personal;
		$personal->rut_p = \Request::input('rut_p');
		$personal->nombre_p = \Request::input('nombre_p');
		$personal->ap_pat_p = \Request::input('ap_pat_p');
		$personal->ap_mat_p = \Request::input('ap_mat_p');
		$personal->direccion_p = \Request::input('direccion_p');
	    $personal->telefono_p = \Request::input('telefono_p');
		$personal->email_p = \Request::input('email_p');
		$personal->tipo_p = \Request::input('tipo_p');
		$personal->contrasena_p = \Hash::make($nombresito.substr($contra, -4));
		$personal->nacionalidad_p = \Request::input('nacionalidad_p');
		$personal->fecha_nac_p = \Request::input('fecha_nac_p');
		$personal->sexo_p = \Request::input('sexo_p');
		$personal->profesion_p = \Request::input('profesion_p');
		$personal->fotografia_p = \Request::input('fotografia_p');
		$personal->estado = 1;
		$personal->id_emp = 1;
		$personal->save();

		//obtenemos el campo file definido en el formulario
       $file = $request->file('file');
 
       //obtenemos el nombre del archivo
       $nombre = $file->getClientOriginalName();
 
       //indicamos que queremos guardar un nuevo archivo en el disco local
       \Storage::disk('local')->put($nombre,  \File::get($file));
 

    return redirect('personal/create')->with('message', 'Post saved');
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
	public function edit($rut_p)
	{
		//
		return view('admin.personal.createUpdate')->with('personal', \App\Personal::find($rut_p));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($rut_p,PersonalForm $personalForm)
	{
		//
		$personal = \App\Personal::find($rut_p);
 
 		$personal->nombre_p = \Request::input('nombre_p');
 
  		$personal->ap_pat_p = \Request::input('ap_pat_p');

 		$personal->ap_mat_p = \Request::input('ap_mat_p');

 		$personal->direccion_p = \Request::input('direccion_p');

 		$personal->telefono_p = \Request::input('telefono_p');

 		$personal->email_p = \Request::input('email_p');

 		$personal->tipo_p = \Request::input('tipo_p');

 		$personal->contrasena_p = \Request::input('contrasena_p');

 		$personal->nacionalidad_p = \Request::input('nacionalidad_p');

 		$personal->fecha_nac_p = \Request::input('fecha_nac_p');

 		$personal->sexo_p = \Request::input('sexo_p');


 		$personal->profesion_p = \Request::input('profesion_p');

 		$personal->fotografia_p = \Request::input('fotografia_p');

 
 		$personal->save();
 
 		return redirect()->route('personal.edit', ['post' => $rut_p])->with('message', 'Personal updated');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($rut_p)
	{
		//
		$personal= \App\Personal::find($rut_p);
 
 		$personal->delete();
 
 		return redirect()->route('personal.index')->with('message', 'Personal deleted');
	}

}
