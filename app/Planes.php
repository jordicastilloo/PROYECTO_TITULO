<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Planes extends Model {

	//
	public $timestamps = false;
	protected $table = 'planes';
	protected $primaryKey = 'id_plan';
	protected $fillable = ['nombre_plan', 'precio_plan'];
	protected $guarded = ['id_plan'];

}
