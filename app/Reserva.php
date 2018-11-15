<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Reserva extends Model {

	//
	public $timestamps = false;
	protected $table = 'reserva';
	protected $primaryKey = 'id_reserva';
	protected $fillable = ['hora_inicio', 'hora_fin', 'fecha','clientes_rut_cliente','personal_rut_p'];
	protected $guarded = ['id_reserva'];

}
