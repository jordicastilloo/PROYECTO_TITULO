<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Clientes extends Model {

	//
	public $timestamps = false;
    protected $table = 'clientes';
	protected $primaryKey = 'rut_cl';
	//protected $
	protected $fillable = ['rut_cl','nombre_cliente', 'ap_pat_cliente', 'ap_mat_cliente','telefono_cliente','email_cliente','huella_cliente','contrasena_cliente','nacionalidad_cliente','fecha_nac_cliente','sexo_cliente','alergia_cliente','patologia_cliente','fotografia_cliente','estado'];
	protected $guarded = ['rut_cl'];

/*
	protected $fillable = ['rut_cl','nombre_cliente', 'ap_pat_cliente', 'ap_mat_cliente','telefono_cliente','email_cliente','huella_cliente','contrasena_cliente','nacionalidad_cliente','fecha_nac_cliente','sexo_cliente','alergia_cliente','patologia_cliente','fotografia_cliente','estado'];
*/
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

public function progreso() //id
{
		return $this->hasOne('App\Progreso','rut_cl','rut_cl');
	}


	public function scopeType($query,$estado){
    	$estados = config('options4.estados');

    	if($estado != "" && isset($estados[$estado])){
    		$query->where('estado',$estado);
    	}
    }





}
