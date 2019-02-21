 <?php


use Illuminate\Support\Facades\Route;


use App\implementos;


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::post('admin.contiene.inicio2/modal-{{$Contiene->rut_cl}}','ContieneController@index');


Route::get('parametro/{id}','ContieneController@index');







Route::resource('rutinas','RutinaController');

Route::resource('ejercicios','EjerciciosController');

Route::resource('personas', 'PersonasController');

Route::resource('planes', 'PlanesController');

Route::resource('progreso', 'ProgresoController');

Route::resource('contiene', 'ContieneController');




Route::resource('clientes', 'ClientesController');


//Route::get('Editar','ClientesController@EditarForm');
Route::post('inicio2','ClientesController@EditaraInactivo');


Route::post('inicio','ClientesController@EditaraActivo');








Route::resource('implementos', 'ImplementosController');

Route::resource('personas', 'PersonasController');


Route::get('/', 'InicioController@index');



Route::get('login', 'LoginController@index');

Route::get('admin', 'HomeController@index');

Route::get('home', 'HomeController@index');

Route::resource('personal', 'PersonalController');

Route::resource('clases', 'ClasesController');

Route::resource('empresa', 'EmpresaController');

Route::resource('plan_nutricional', 'Plan_nutricionalController');

Route::resource('reserva', 'ReservaController');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);



Route::get('/read', function(){
   $clients = DB::select('call viewClients()');
   dump($clients);
});







Route::get('home', function(){
	return view('home');
});

/*
Route::get('inscripcion', function(){
	return view('admin.inscripcion.inicio');
});
*/
Route::get('entrenador', function(){
	return view('sitioweb.entrenador');
});

Route::get('galeria', function(){
	return view('sitioweb.galeria');
});

Route::get('blog', function(){
	return view('sitioweb.blog');
});

Route::get('contacto', function(){
	return view('sitioweb.contacto');
});