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
 * @property CATEGORIA $categoria
 * @property CARRINHOITEM $carrinhoItem
 * @property PEDIDOITEM $carrinhoItem
 * @property PRODUTOESTOQUE $produtoEstoque
 * @property Collection|PRODUTOIMAGEM[] $produtoImagens
 *
 * @package App\Models
 */
class PRODUTO extends Model
{
	protected $table = 'PRODUTO';
	protected $primaryKey = 'PRODUTO_ID';
	public $timestamps = false;

	public function categoria()
	{
		return $this->belongsTo(CATEGORIA::class, 'CATEGORIA_ID');
	}

	public function carrinhoItem()
	{
		return $this->hasOne(CARRINHOITEM::class, 'PRODUTO_ID');
	}

	public function pedidoItem()
	{
		return $this->hasOne(PEDIDOITEM::class, 'PRODUTO_ID');
	}

	public function produtoEstoque()
	{
		return $this->hasOne(PRODUTOESTOQUE::class, 'PRODUTO_ID');
	}

	public function produtoImagens()
	{
		return $this->hasMany(PRODUTOIMAGEM::class, 'PRODUTO_ID');
	}
}
