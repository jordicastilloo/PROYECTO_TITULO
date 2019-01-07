<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Plan_Nutricional extends Model {

	public $timestamps = false;
	protected $table = 'plan_nutricional';
	protected $primaryKey = 'id_plan_nut';
	protected $fillable = ['nombre_plan_nut', 'descripcion_plan_nut', 'rut_p','rut_cliente'];
	protected $guarded = ['id_plan_nut'];

}
