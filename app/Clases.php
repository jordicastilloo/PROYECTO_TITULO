<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Clases extends Model {

	//
	public $timestamps = false;
    protected $table = 'clases';
	protected $primaryKey = 'id_clase';
	//protected $
	protected $fillable = ['nombre_clase', 'descripcion_clase','hora_inicio', 'hora_fin','empresa_id_emp'];
	protected $guarded = ['id_clase'];

	public function scopeSearch($query,$name){


        if(trim($name) != ""){
        return $query->where('nombre_clase','LIKE',"%$name%");
    }
 }

}
