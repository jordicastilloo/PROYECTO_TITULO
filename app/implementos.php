<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class implementos extends Model {

	//
	protected $table = 'implementos';
	protected $fillable = ['nombre', 'estado', 'tipo'];
	protected $guarded = ['idimplemento'];

}
