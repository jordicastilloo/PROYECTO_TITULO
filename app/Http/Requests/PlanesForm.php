<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class PlanesForm extends Request {

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
			'nombre_plan'=> 'max:120|unique:planes|required',
		    'precio_plan'=> 'required|numeric',
		    'duracion_plan' => 'required'
		    	];
	
	}

}
