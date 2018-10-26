<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class implementos extends Model {

	//
	public $timestamps = false;
	protected $table = 'implementos';
	protected $fillable = ['nombre', 'estado', 'tipo'];
	protected $guarded = ['idimplemento'];
}
