<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Plan_nutricional extends Model {

	//
	public $timestamps = false;
	protected $table = 'plan_nutricional';
	protected $primaryKey = 'id_plan_nut';
	protected $fillable = ['nombre_plan_nut', 'descripcion_plan_nut', 'personal_rut_p','clientes_rut_cliente'];
	protected $guarded = ['id_plan_nut'];

}
