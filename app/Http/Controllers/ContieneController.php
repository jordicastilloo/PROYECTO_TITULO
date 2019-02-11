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

	 	//$contiene = Contiene::search($request->name);


        $contiene = DB::table('rutinas')
        ->join('contienes', 'rutinas.id_rutina', '=', 'contienes.id_rutina')
        ->join('clientes','rutinas.rut_cl','=','clientes.rut_cl')
        ->distinct()
        ->select('rutinas.nombre_rutina','rutinas.id_rutina','rutinas.desc_rutina','rutinas.rut_cl','clientes.nombre_cliente','clientes.ap_pat_cliente','clientes.ap_mat_cliente')
        ->paginate(5,['nombre_rutina']);
        //return $contiene2;



        
        $consultaejercicios = DB::table('ejercicios')

        ->join('contienes', 'ejercicios.id_ejercicio', '=', 'contienes.id_ejercicio')
        ->join('rutinas','rutinas.id_rutina','=','contienes.id_rutina')
        ->distinct()
        ->where('rutinas.rut_cl','=','190877345')
        ->select('ejercicios.nombre','rutinas.rut_cl','rutinas.desc_rutina','contienes.id_cont','ejercicios.fotografia','ejercicios.video','ejercicios.descripcion','ejercicios.clasificacion','ejercicios.tipo','ejercicios.repeticiones','ejercicios.series')
        ->groupby('ejercicios.nombre')
        ->paginate(5,['nombre']);

       



       //return $contiene;




	    //return view ('admin.contiene.inicio2')->with('contiene',$contiene);


		return view('admin.contiene.inicio2',compact('contiene','consultamodal','consultaejercicios'));


	    
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



		//$ejercicios = Ejercicios::lists('nombre','id_ejercicio');

		//$ejercicios = Ejercicios::all();

		$ejercicios = DB::table('ejercicios')
		->where('clasificacion','hombro')
		->get();

		$ejercicios2 = DB::table('ejercicios')
		->where('clasificacion','pecho')
		->get();

		$ejercicios3 = DB::table('ejercicios')
		->where('clasificacion','espalda')
		->get();

		$ejercicios4 = DB::table('ejercicios')
		->where('clasificacion','piernas')
		->get();




		return view('admin.contiene.createUpdate',compact('rutinas','ejercicios','ejercicios2','ejercicios3','ejercicios4'));


		

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
		$contiene->dia = \Request::input('dia');
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
