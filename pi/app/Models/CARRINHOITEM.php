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
 * @property PRODUTO $produto
 * @property USUARIO $usuario
 *
 * @package App\Models
 */
class CARRINHOITEM extends Model
{
	protected $table = 'CARRINHO_ITEM';
	public $incrementing = false;
	protected $primaryKey = ['PRODUTO_ID', 'USUARIO_ID'];
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

	public function produto()
	{
		return $this->belongsTo(PRODUTO::class, 'PRODUTO_ID');
	}

	public function usuario()
	{
		return $this->belongsTo(User::class, 'USUARIO_ID');
	}

}
