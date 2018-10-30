<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Personas extends Model {

	//
	public $timestamps = false;
	protected $table = 'personas';
	protected $primaryKey = 'RutPersona';
	protected $fillable = ['RutPersona','Nombre', 'Apellido_Materno', 'Apellido_Paterno','Telefono','Email','Tipo','Huella','Nacionalidad','Fecha_nacimiento','Sexo','Alergico','Patologia','Fotografia'];
	protected $guarded = ['RutPersona'];
	

}
