<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Ejercicios extends Model {

	//
	//
	public $timestamps = false;
	protected $table = 'ejercicios';
	protected $primaryKey = 'id_ejercicio';
	protected $fillable = ['nombre', 'fotografia', 'video','descripcion','clasificacion','tipo'];
	protected $guarded = ['id_ejercicio'];

}
