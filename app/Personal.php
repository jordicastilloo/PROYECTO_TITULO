<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Personal extends Model {

	//
    public $timestamps = false;
    protected $table = 'personals';
	protected $primaryKey = 'rut_p';
	//protected $
	protected $fillable = ['rut_p','tipo_p', 'nombre_p', 'ap_pat_p','ap_mat_p','telefono_p','email_p','contrasena_p','nacionalidad_p','fecha_nac','sexo_p','profesion_p','fotografia_p','empresa_id_emp'];
	protected $guarded = ['rut_p'];


$personal = Personal::with(['personal'=> function($q){

            $q->select([
                id,
                DB::raw("CONCAT(nombre_p,' ',ap_pat_p)  AS fullname")
            ]);

    }])->get();


	public function scopeSearch($query,$name){


        if(trim($name) != ""){
        //return $query->where('nombre_p','LIKE',"%$name%");

      return $query->where($q,'LIKE',"%$name%");


    }
 }

}
