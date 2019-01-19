<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Rutina extends Model {

	//
	public $timestamps = false;
    protected $table = 'rutinas';
	protected $primaryKey = 'id_rutina';
	//protected $
	protected $fillable = ['id_rutina','nombre_rutina', 'desc_rutina','rut_cl','rut_p'];
	protected $guarded = ['id_rutina'];


}
