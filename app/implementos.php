<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Implementos extends Model {

	public $timestamps = false;
	protected $table = 'implementos';
	protected $primaryKey = 'id_implemento';
	protected $fillable = ['nombre', 'estado', 'stock','fecha_ingreso','subcategoria','id_emp','tipo_id_tip'];
	protected $guarded = ['id_implemento'];


 public function scopeSearch($query,$name){


        if(trim($name) != ""){
        return $query->where('nombre','LIKE',"%$name%");
    }
 }


 public function scopeType($query,$estado){
    	$estados = config('options2.estados');

    	if($estado != "" && isset($estados[$estado])){
    		$query->where('estado',$estado);
    	}
    }




}
