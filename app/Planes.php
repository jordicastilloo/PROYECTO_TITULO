<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Planes extends Model {

	public $timestamps = false;
	protected $table = 'planes';
	protected $primaryKey = 'id_plan';
	protected $fillable = ['nombre_plan', 'precio_plan','duracion_plan'];
	protected $guarded = ['id_plan'];


	public function scopeSearch($query,$name){


        if(trim($name) != ""){
        return $query->where('nombre_plan','LIKE',"%$name%");
    }
 }

}
