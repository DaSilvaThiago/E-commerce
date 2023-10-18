<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PEDIDOITEM
 * 
 * @property int $PRODUTO_ID
 * @property int $PEDIDO_ID
 * @property int $ITEM_QTD
 * @property float $ITEM_PRECO
 * 
 * @property PEDIDO $p_e_d_i_d_o
 * @property PRODUTO $p_r_o_d_u_t_o
 *
 * @package App\Models
 */
class PEDIDOITEM extends Model
{
	protected $table = 'PEDIDO_ITEM';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'PRODUTO_ID' => 'int',
		'PEDIDO_ID' => 'int',
		'ITEM_QTD' => 'int',
		'ITEM_PRECO' => 'float'
	];

	protected $fillable = [
		'PRODUTO_ID',
		'PEDIDO_ID',
		'ITEM_QTD',
		'ITEM_PRECO'
	];

	public function p_e_d_i_d_o()
	{
		return $this->belongsTo(PEDIDO::class, 'PEDIDO_ID');
	}

	public function p_r_o_d_u_t_o()
	{
		return $this->belongsTo(PRODUTO::class, 'PRODUTO_ID');
	}
}
