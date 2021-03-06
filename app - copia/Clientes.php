<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Clientes extends Model {

	//
	public $timestamps = false;
    protected $table = 'clientes';
	protected $primaryKey = 'rut_cliente';
	//protected $
	protected $fillable = ['rut_cliente','nombre_cliente', 'ap_pat_cliente', 'ap_mat_cliente','telefono_cliente','email_cliente','huella_cliente','contrasena_cliente','nacionalidad_cliente','fecha_nac_cliente','sexo_cliente','alergia_cliente','patologia_cliente','fotografia_cliente','empresa_id_emp','contrata_id_insc'];
	protected $guarded = ['rut_cliente'];




	public function getFullNameAttribute()
	{
		return $this->nombre_cliente.''.$this->ap_pat_cliente;
	}



	public function scopeSearch($query,$name){



        if(trim($name) != "")
        {
        //return $query->where('nombre_p','LIKE',"%$name%");
         $query->where(\DB::raw("CONCAT(nombre_cliente,' ',ap_pat_cliente)"),"LIKE","%$name%");

    }
 }

}
