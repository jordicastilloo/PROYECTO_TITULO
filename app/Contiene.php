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


}
