<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class USUARIO
 * 
 * @property int $USUARIO_ID
 * @property string $USUARIO_NOME
 * @property string $USUARIO_EMAIL
 * @property string $USUARIO_SENHA
 * @property string $USUARIO_CPF
 * 
 * @property CARRINHOITEM $c_a_r_r_i_n_h_o_i_t_e_m
 * @property Collection|ENDERECO[] $e_n_d_e_r_e_c_o_s
 * @property Collection|PEDIDO[] $p_e_d_i_d_o_s
 *
 * @package App\Models
 */
class USUARIO extends Model
{
	protected $table = 'USUARIO';
	protected $primaryKey = 'USUARIO_ID';
	public $timestamps = false;

	protected $fillable = [
		'USUARIO_NOME',
		'USUARIO_EMAIL',
		'USUARIO_SENHA',
		'USUARIO_CPF'
	];

	public function c_a_r_r_i_n_h_o_i_t_e_m()
	{
		return $this->hasOne(CARRINHOITEM::class, 'USUARIO_ID');
	}

	public function e_n_d_e_r_e_c_o_s()
	{
		return $this->hasMany(ENDERECO::class, 'USUARIO_ID');
	}

	public function p_e_d_i_d_o_s()
	{
		return $this->hasMany(PEDIDO::class, 'USUARIO_ID');
	}
}
