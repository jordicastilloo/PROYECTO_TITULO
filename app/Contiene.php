<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Contiene extends Model {

	//
	public $timestamps = false;
    protected $table = 'contienes';
	protected $primaryKey = 'id_cont';
	//protected $
	protected $fillable = ['id_cont','id_rutina', 'id_ejercicio'];
	protected $guarded = ['id_cont'];




	public function rutina() //id
{
		return $this->hasOne('App\Rutina','id_rutina','id_rutina');
	}




   public function getFullNameAttribute()
	{
		return $this->nombre_rutina;
	}



	public function scopeSearch($query,$name){

        if(trim($name) != "")
        {
        return $query->where('nombre_rutina','LIKE',"%$name%");
         //$query->where(\DB::raw("nombre_rutina',"LIKE","%$name%");

    }
 }



}
