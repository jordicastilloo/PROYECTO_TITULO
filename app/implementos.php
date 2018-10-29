<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class implementos extends Model {

	//
	public $timestamps = false;
	protected $table = 'implementos';
	protected $primaryKey = 'idimplemento';
	protected $fillable = ['nombre', 'estado', 'tipo'];
	protected $guarded = ['idimplemento'];
}
