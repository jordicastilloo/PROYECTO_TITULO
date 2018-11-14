<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class PersonalForm extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			//
			/*
			"rut_p"    =>    "required|min:5|max:45",
            "tipo_p" => "required|min:5|max:500",
            "nombre_p" => "required|min:5|max:500",
            "ap_pat_p" => "required|min:5|max:500",
            "ap_mat_p" => "required|min:5|max:500",
            "telefono_p" => "required|min:5|max:500",
            "email_p" => "required|min:5|max:500",
            "contrasena_p" => "required|min:5|max:500",
            "nacionalidad_p" => "required|min:5|max:500",
            "fecha_nac_p" => "required|min:5|max:500",
            "sexo_p" => "required|min:5|max:500",
            "profresion_p" => "required|min:5|max:500",
            "fotografia_p" => "required|min:5|max:500",
            "empresa_id_emp" => "required|min:5|max:500"
            */
		];
	}



 public function messages()
 {
     return [

     	/*
         'rut_p.required' => 'El campo rut es requerido!',
         'title.min' => 'El campo title no puede tener menos de 5 carácteres',
 'title.min' => 'El campo title no puede tener más de 45 carácteres',
 'body.required' => 'El campo body es requerido!',
         'body.min' => 'El campo body no puede tener menos de 5 carácteres',
 'body.min' => 'El campo body no puede tener más de 500 carácteres',*/
     ];
 }

}
