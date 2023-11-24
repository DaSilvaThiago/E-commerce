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
 * @property PEDIDO $pedido
 * @property PRODUTO $produto
 *
 * @package App\Models
 */
class PEDIDOITEM extends Model
{
	protected $table = 'PEDIDO_ITEM';
	public $incrementing = false;
	protected $primaryKey = ['PRODUTO_ID', 'PEDIDO_ID'];
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

	public function pedido()
	{
		return $this->belongsTo(PEDIDO::class, 'PEDIDO_ID');
	}

	public function produto()
	{
		return $this->belongsTo(PRODUTO::class, 'PRODUTO_ID');
	}

	protected function setKeysForSaveQuery($query){
        return $query->where('PEDIDO_ID', $this->getAttribute('PEDIDO_ID'))
                     ->where('PRODUTO_ID', $this->getAttribute('PRODUTO_ID'));
    }
}
