<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PRODUTOESTOQUE
 * 
 * @property int $PRODUTO_ID
 * @property int $PRODUTO_QTD
 * 
 * @property PRODUTO $p_r_o_d_u_t_o
 *
 * @package App\Models
 */
class PRODUTOESTOQUE extends Model
{
	protected $table = 'PRODUTO_ESTOQUE';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'PRODUTO_ID' => 'int',
		'PRODUTO_QTD' => 'int'
	];

	protected $fillable = [
		'PRODUTO_ID',
		'PRODUTO_QTD'
	];

	public function p_r_o_d_u_t_o()
	{
		return $this->belongsTo(PRODUTO::class, 'PRODUTO_ID');
	}
}
