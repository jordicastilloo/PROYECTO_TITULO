<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Progreso extends Model {

	public $timestamps = false;
	protected $table = 'progresos';
	protected $primaryKey = 'id_progreso';
	protected $fillable = ['peso_corporal', 'estatura', 'subescapular','tricipital','bicipital','supra_iliaco','hombros','pecho','biceps_relajado','biceps_contraido','muneca','cintura','cadera','muslo','gemelo','fecha_evaluacion','rut_cl'];
	protected $guarded = ['id_progreso'];



	public function clientes() //id
{
		return $this->hasOne('App\Clientes','rut_cl','rut_cl');
	}


/*
	public static function comprobar(){   
   if (Progreso::where('rut_cl', '=', Input::get('rut_cl'))->exists()) { 
    // user found 
      echo 'existe usuario';

   } 
   }*/



   public function getFullNameAttribute()
	{
		return $this->nombre_cliente.''.$this->ap_pat_cliente;
	}



	public function scopeSearch($query,$name){

        if(trim($name) != "")
        {
        //return $query->where('nombre_p','LIKE',"%$name%");
         $query->where(\DB::raw("CONCAT(nombre_cliente,' ',ap_pat_cliente)"),"LIKE","%$name%");

    }
 }


 

      
}
