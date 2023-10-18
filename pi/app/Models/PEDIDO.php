<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class PEDIDO
 * 
 * @property int $PEDIDO_ID
 * @property int $USUARIO_ID
 * @property int $ENDERECO_ID
 * @property int $STATUS_ID
 * @property Carbon $PEDIDO_DATA
 * 
 * @property ENDERECO $e_n_d_e_r_e_c_o
 * @property PEDIDOSTATUS $p_e_d_i_d_o_s_t_a_t_u_s
 * @property USUARIO $u_s_u_a_r_i_o
 * @property PEDIDOITEM $p_e_d_i_d_o_i_t_e_m
 *
 * @package App\Models
 */
class PEDIDO extends Model
{
	protected $table = 'PEDIDO';
	protected $primaryKey = 'PEDIDO_ID';
	public $timestamps = false;

	protected $casts = [
		'USUARIO_ID' => 'int',
		'ENDERECO_ID' => 'int',
		'STATUS_ID' => 'int',
		'PEDIDO_DATA' => 'datetime'
	];

	protected $fillable = [
		'USUARIO_ID',
		'ENDERECO_ID',
		'STATUS_ID',
		'PEDIDO_DATA'
	];

	public function e_n_d_e_r_e_c_o()
	{
		return $this->belongsTo(ENDERECO::class, 'ENDERECO_ID');
	}

	public function p_e_d_i_d_o_s_t_a_t_u_s()
	{
		return $this->belongsTo(PEDIDOSTATUS::class, 'STATUS_ID');
	}

	public function u_s_u_a_r_i_o()
	{
		return $this->belongsTo(USUARIO::class, 'USUARIO_ID');
	}

	public function p_e_d_i_d_o_i_t_e_m()
	{
		return $this->hasOne(PEDIDOITEM::class, 'PEDIDO_ID');
	}
}
