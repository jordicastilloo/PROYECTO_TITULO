<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model {

	//
	public $timestamps = false;
	protected $table = 'empresa';
	protected $primaryKey = 'id_emp';
	protected $fillable = ['nombre_emp', 'direccion_emp', 'telefono_emp','email_emp'];
	protected $guarded = ['id_emp'];

}
