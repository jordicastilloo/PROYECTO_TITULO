<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\ContieneForm;
use Illuminate\Http\Request;
use App\Rutina;
use App\Contiene;
use App\Ejercicios;
use Illuminate\Support\Facades\Input;
use DB;





class ContieneController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{
		
		

		
		//FUNCIONA
		/*
	 	$contiene = DB::table('contienes')
	 	->select('id_rutina')
	    ->distinct()
	    //->where('rutinas.id_rutina','=','contienes.id_rutina')
	 	//->get(['contienes.id_rutina'])
	 	//->get(['contienes.id_rutina'])
	 	->paginate(5,['id_rutina']);*/	

	 	//return $contiene;

	 	$contiene = Contiene::search($request->name);



        $contiene = DB::table('rutinas')
        ->join('contienes', 'rutinas.id_rutina', '=', 'contienes.id_rutina')
        //->join('departments', 'users.dpt_id', '=', 'departments.id')
        ->distinct()
        ->select('rutinas.nombre_rutina','rutinas.id_rutina')
        ->paginate(5,['nombre_rutina']);
        //return $contiene;



	    return view ('admin.contiene.inicio')->with('contiene',$contiene);


		//return view('admin.contiene.inicio',compact('contiene'));


	    
   		$ejercicios = Ejercicios::all();

   		return view('select', ['ejercicios'=> $ejercicios]);

		
		

	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		
		

		$rutinas = Rutina::lists('nombre_rutina','id_rutina');



		$ejercicios = Ejercicios::lists('nombre','id_ejercicio');

		$ejercicios = Ejercicios::all();


		return view('admin.contiene.createUpdate',compact('rutinas','ejercicios'));


		

	    //return view('admin.contiene.createUpdate');

	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{

		//Contiene::create($request->all());



		$id_ejercicio = Input::get('id_ejercicio');

foreach ($id_ejercicio as $key => $value)
{

		$contiene = new \App\contiene;
		$contiene->id_rutina = \Request::input('id_rutina');
		$contiene->id_ejercicio = $value;
		$contiene->save();


}

    return redirect('contiene/create')->with('message', 'Post saved');

	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id_cont)
	{
		//

	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id_rutina)
	{
		//
	    return view('admin.contiene.createUpdate')->with('contiene', \App\Contiene::find($id_rutina));

	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id_cont)
	{
		//
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
		$contiene = \App\Contiene::find($id_rutina);
 
 		$contiene->delete();
 
 		return redirect()->route('contiene.index')->with('message', 'Implemento deleted');
	}


	

}
