<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class PRODUTO
 * 
 * @property int $PRODUTO_ID
 * @property string $PRODUTO_NOME
 * @property string $PRODUTO_DESC
 * @property float $PRODUTO_PRECO
 * @property float $PRODUTO_DESCONTO
 * @property int $CATEGORIA_ID
 * @property bool $PRODUTO_ATIVO
 * 
 * @property CATEGORIUM $c_a_t_e_g_o_r_i_u_m
 * @property CARRINHOITEM $c_a_r_r_i_n_h_o_i_t_e_m
 * @property PEDIDOITEM $p_e_d_i_d_o_i_t_e_m
 * @property PRODUTOESTOQUE $p_r_o_d_u_t_o_e_s_t_o_q_u_e
 * @property Collection|PRODUTOIMAGEM[] $p_r_o_d_u_t_o_i_m_a_g_e_m_s
 *
 * @package App\Models
 */
class PRODUTO extends Model
{
	protected $table = 'PRODUTO';
	protected $primaryKey = 'PRODUTO_ID';
	public $timestamps = false;

	protected $casts = [
		'PRODUTO_PRECO' => 'float',
		'PRODUTO_DESCONTO' => 'float',
		'CATEGORIA_ID' => 'int',
		'PRODUTO_ATIVO' => 'bool'
	];

	protected $fillable = [
		'PRODUTO_NOME',
		'PRODUTO_DESC',
		'PRODUTO_PRECO',
		'PRODUTO_DESCONTO',
		'CATEGORIA_ID',
		'PRODUTO_ATIVO'
	];

	public function c_a_t_e_g_o_r_i_u_m()
	{
		return $this->belongsTo(CATEGORIUM::class, 'CATEGORIA_ID');
	}

	public function c_a_r_r_i_n_h_o_i_t_e_m()
	{
		return $this->hasOne(CARRINHOITEM::class, 'PRODUTO_ID');
	}

	public function p_e_d_i_d_o_i_t_e_m()
	{
		return $this->hasOne(PEDIDOITEM::class, 'PRODUTO_ID');
	}

	public function p_r_o_d_u_t_o_e_s_t_o_q_u_e()
	{
		return $this->hasOne(PRODUTOESTOQUE::class, 'PRODUTO_ID');
	}

	public function p_r_o_d_u_t_o_i_m_a_g_e_m_s()
	{
		return $this->hasMany(PRODUTOIMAGEM::class, 'PRODUTO_ID');
	}
}
