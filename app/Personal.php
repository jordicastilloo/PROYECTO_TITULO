<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Personal extends Model {

	//
    public $timestamps = false;
    protected $table = 'personal';
	protected $primaryKey = 'rut_p';
	//protected $
	protected $fillable = ['rut_p','tipo_p', 'nombre_p', 'ap_pat_p','ap_mat_p','telefono_p','email_p','contrasena_p','nacionalidad_p','fecha_nac','sexo_p','profesion_p','fotografia_p','empresa_id_emp'];
	protected $guarded = ['rut_p'];

}
