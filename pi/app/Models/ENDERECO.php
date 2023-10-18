<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ENDERECO
 * 
 * @property int $ENDERECO_ID
 * @property int $USUARIO_ID
 * @property string $ENDERECO_NOME
 * @property string $ENDERECO_LOGRADOURO
 * @property string $ENDERECO_NUMERO
 * @property string|null $ENDERECO_COMPLEMENTO
 * @property string $ENDERECO_CEP
 * @property string $ENDERECO_CIDADE
 * @property string $ENDERECO_ESTADO
 * 
 * @property USUARIO $u_s_u_a_r_i_o
 * @property Collection|PEDIDO[] $p_e_d_i_d_o_s
 *
 * @package App\Models
 */
class ENDERECO extends Model
{
	protected $table = 'ENDERECO';
	protected $primaryKey = 'ENDERECO_ID';
	public $timestamps = false;

	protected $casts = [
		'USUARIO_ID' => 'int'
	];

	protected $fillable = [
		'USUARIO_ID',
		'ENDERECO_NOME',
		'ENDERECO_LOGRADOURO',
		'ENDERECO_NUMERO',
		'ENDERECO_COMPLEMENTO',
		'ENDERECO_CEP',
		'ENDERECO_CIDADE',
		'ENDERECO_ESTADO'
	];

	public function u_s_u_a_r_i_o()
	{
		return $this->belongsTo(USUARIO::class, 'USUARIO_ID');
	}

	public function p_e_d_i_d_o_s()
	{
		return $this->hasMany(PEDIDO::class, 'ENDERECO_ID');
	}
}
