<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipos extends Model {

	//
	public $timestamps = false;
	protected $table = 'tipos';
	protected $primaryKey = 'id_tipo';
	protected $fillable = ['nombre_tipo'];
	protected $guarded = ['id_tipo'];

}
