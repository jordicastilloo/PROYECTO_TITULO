<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class implementos extends Model {

	//
	public $timestamps = false;
	protected $table = 'implementos';
	protected $primaryKey = 'id_implemento';
	protected $fillable = ['nombre', 'estado', 'tipo'];
	protected $guarded = ['id_implemento'];



 public function scopeSearch($query,$name){


        if(trim($name) != ""){
        return $query->where('nombre','LIKE',"%$name%");
    }
 }
}
