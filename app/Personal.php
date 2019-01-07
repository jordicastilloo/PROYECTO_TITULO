<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Personal extends Model {

 public $timestamps = false;
    protected $table = 'personals';
	protected $primaryKey = 'rut_p';
	//protected $
	protected $fillable = ['rut_p','tipo_p', 'nombre_p', 'ap_pat_p','ap_mat_p','telefono_p','email_p','contrasena_p','nacionalidad_p','fecha_nac','sexo_p','profesion_p','fotografia_p','id_emp'];
	protected $guarded = ['rut_p'];


	public function getFullNameAttribute()
	{
		return $this->nombre_p.''.$this->ap_pat_p;
	}



	public function scopeSearch($query,$name){



        if(trim($name) != "")
        {
        //return $query->where('nombre_p','LIKE',"%$name%");
         $query->where(\DB::raw("CONCAT(nombre_p,' ',ap_pat_p)"),"LIKE","%$name%");

     }
    }


    public function scopeType($query,$type){
    	$types = config('options.types');

    	if($type != "" && isset($types[$type])){
    		$query->where('tipo_p',$type);
    	}
    }


}
