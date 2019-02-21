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
		\DB::table('planes')->insert(array (
			'nombre_plan'	=>	'Plan Mensual',
			'precio_plan'	=>	'15990',
			'duracion_plan'	=>	'30'
		));

		Model::unguard();
		\DB::table('clientes')->insert(array (
			'rut_cl'				=> '19380335',
			'nombre_cliente'		=> 'Jordi',
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
			'estado'				=> '1', //0=inactivo 1=activo
			'id_emp'				=> '1',
		));


		Model::unguard();
		\DB::table('contratas')->insert(array (
			'inicio_insc'	=>	'2019/01/01',
			'pago_insc'		=>	'15990',
			'fin_insc'		=>	'2018/02/01',
			'rut_cl'		=> 	'19380335',
			'id_plan'		=>	'1'
		));
		// $this->call('UserTableSeeder');
	}

}
