<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Ejercicios extends Model {

	//
	//
	public $timestamps = false;
	protected $table = 'ejercicios';
	protected $primaryKey = 'id_ejercicio';
	protected $fillable = ['nombre', 'fotografia', 'video','descripcion','clasificacion','tipo','series','repeticiones'];
	protected $guarded = ['id_ejercicio'];


	public function getFullNameAttribute()
	{
		return $this->nombre;
	}



	public function scopeSearch($query,$name){



        if(trim($name) != "")
        {
        //return $query->where('nombre_p','LIKE',"%$name%");
 		$query->where(\DB::raw("nombre"),"LIKE","%$name%");
    }
 }

}
