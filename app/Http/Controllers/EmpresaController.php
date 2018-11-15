<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\EmpresaForm;
use Illuminate\Http\Request;

class EmpresaController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		return view("admin.empresa.inicio")->with('empresa', \App\Empresa::paginate(2)->setPath('empresa'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
			return view("empresa.createUpdate");
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
		$empresa = new \App\empresa;
		$empresa->nombre_emp = \Request::input('nombre_emp');
		$empresa->direccion_emp = \Request::input('direccion_emp');
		$empresa->telefono_emp = \Request::input('telefono_emp');
		$empresa->email_emp = \Request::input('email_emp');
		$empresa->save();

    return redirect('empresa/create')->with('message', 'Post saved');
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
	public function edit($id_emp)
	{
		//
		return view('admin.empresa.createUpdate')->with('empresa', \App\Empresa::find($id_emp));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id_emp,EmpresaForm $empresaForm)
	{
		//
		$empresa = \App\Empresa::find($id_emp);
 
 		$empresa->nombre_emp = \Request::input('nombre_emp');
 
  		$empresa->direccion_emp = \Request::input('direccion_emp');

 		$empresa->telefono_emp = \Request::input('telefono_emp');

 		$empresa->email_emp = \Request::input('email_emp');
 
 		$empresa->save();
 
 		return redirect()->route('empresa.edit', ['post' => $id_emp])->with('message', 'Post updated');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id_emp)
	{
		//
		$empresa = \App\Empresa::find($id_emp);
 
 		$empresa->delete();
 
 		return redirect()->route('empresa.index')->with('message', 'Implemento deleted');
	}

}
