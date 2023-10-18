<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CARRINHOITEM
 * 
 * @property int $USUARIO_ID
 * @property int $PRODUTO_ID
 * @property int $ITEM_QTD
 * 
 * @property PRODUTO $p_r_o_d_u_t_o
 * @property USUARIO $u_s_u_a_r_i_o
 *
 * @package App\Models
 */
class CARRINHOITEM extends Model
{
	protected $table = 'CARRINHO_ITEM';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'USUARIO_ID' => 'int',
		'PRODUTO_ID' => 'int',
		'ITEM_QTD' => 'int'
	];

	protected $fillable = [
		'USUARIO_ID',
		'PRODUTO_ID',
		'ITEM_QTD'
	];

	public function p_r_o_d_u_t_o()
	{
		return $this->belongsTo(PRODUTO::class, 'PRODUTO_ID');
	}

	public function u_s_u_a_r_i_o()
	{
		return $this->belongsTo(USUARIO::class, 'USUARIO_ID');
	}
}
