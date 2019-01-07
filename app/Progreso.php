<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Progreso extends Model {

	public $timestamps = false;
	protected $table = 'progresos';
	protected $primaryKey = 'id_progreso';
	protected $fillable = ['peso_corporal', 'estatura', 'subescapular','tricipital','bicipital','supra_iliaco','hombros','pecho','biceps_relajado','biceps_contraido','muneca','cintura','cadera','muslo','gemelo','fecha_evaluacion','rut_cl'];
	protected $guarded = ['id_progreso'];

}
