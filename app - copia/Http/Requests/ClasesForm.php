<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class ClasesForm extends Request {

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
