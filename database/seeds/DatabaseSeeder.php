<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();
		\DB::table('empresas')->insert(array (
			'nombre_emp'	=>	'Gimnasio Esparta',
			'direccion_emp'	=>	'Chiguayante',
			'telefono_emp'	=>	'133',
			'email_emp'		=>	'gym@gym.cl'

		));

		Model::unguard();
		\DB::table('clases')->insert(array (
			'nombre_clase'	=>	'Zumba Fitness',
			'descripcion_clase'	=>	'zumba para cardio',
			'hora_inicio'	=>	'19:00',
			'hora_fin'		=>	'20:00'

		));

		Model::unguard();
		\DB::table('planes')->insert(array (
			'nombre_plan'	=>	'Plan Mensual',
			'precio_plan'	=>	'15990',
			'duracion_plan'	=>	'1',
			'dias_gratis'   => '2'
		));

		Model::unguard();
		\DB::table('clientes')->insert(array (
			'rut_cl'				=> '19380335',
			'nombre_cliente'		=> 'Jordi',
			'direccion_cliente'     => 'calle 1 casa 103 valle del Sol, Chiguayante',
			'ap_pat_cliente'		=> 'Castillo',
			'ap_mat_cliente'		=> 'Olave',
			'telefono_cliente'		=> '133',
			'email_cliente'			=> 'correo@correo.cl',
			'huella_cliente'		=> 'huella',
			'contrasena_cliente'	=>	\Hash::make('123'),
			'nacionalidad_cliente' 	=>	'Chilena',
			'fecha_nac_cliente'		=>	'1996/08/13',
			'sexo_cliente'			=>	'M',
			'alergia_cliente'		=>	'N',
			'patologia_cliente'		=>	'N',
			'fotografia_cliente'	=> 'fotito',
			'estado'				=> '1' //0=inactivo 1=activo
		));

		Model::unguard();
		\DB::table('personals')->insert(array (
			'rut_p'				=> '190877345',
			'tipo_p'		=> 'Profesor',
			'nombre_p'		=> 'Nicolas',
			'direccion_p'     => 'calle 1 casa 122 valle del Sol, Chiguayante',
			'ap_pat_p'		=> 'Llanos',
			'ap_mat_p'		=> 'Ortiz',
			'telefono_p'		=> '133',
			'email_p'			=> 'correo@correo.cl',
			'contrasena_p'	=>	\Hash::make('123'),
			'nacionalidad_p' 	=>	'Chilena',
			'fecha_nac_p'		=>	'1996/08/13',
			'sexo_p'			=>	'M',
			'profesion_p'		=>	'Personal Trainer',
			'fotografia_p'	=> 'fotito',
			'estado'				=> '1' //0=inactivo 1=activo
		));


		Model::unguard();
		\DB::table('contratas')->insert(array (
			'inicio_insc'	=>	'2019/01/01',
			'pago_insc'		=>	'15990',
			'fin_insc'		=>	'2018/02/01',
			'rut_cl'		=> 	'19380335',
			'id_plan'		=>	'1'
		));

		Model::unguard();
		\DB::table('ejercicios')->insert(array (
			'nombre'		=> 'Press Pecho Banca Plano',
			'fotografia'	=> 'fotito',
			'video'			=> 'JhcjQHkjklA',
			'descripcion'	=> 'asdasdsd',
			'clasificacion'	=> 'pecho',
			'repeticiones'	=> '8-10',
			'series'		=> '4'
		));


		Model::unguard();
		\DB::table('implementos')->insert(array (
			'nombre'		=> 'Mancuerna',
			'estado'	=> 'deterioro',
			'tipo'			=> 'Musculacion',
			'stock'	=> '1',
			'fecha_ingreso'	=> '2019/01/01',
			'subcategoria'	=> '10kg'
		));

		Model::unguard();
		\DB::table('progresos')->insert(array (
			'rut_cl'		=> '19380335',
			'peso_corporal'	=> '59',
			'estatura'			=> '165',
			'subescapular'	=> '2',
			'tricipital'	=> '2',
			'bicipital'	=> '3',
			'supra_iliaco'	=> '8',
			'hombros'	=> '9',
			'pecho'	=> '10',
			'biceps_relajado'	=> '6',
			'biceps_contraido'	=> '10',
			'muneca'	=> '25',
			'cintura'	=> '23',
			'cadera'	=> '21',
			'muslo'	=> '2',
			'gemelo'	=> '23',
			'fecha_evaluacion'	=> '2019/01/01'
		));
		
		



	}

}
