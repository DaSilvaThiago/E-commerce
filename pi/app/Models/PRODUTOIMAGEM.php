<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PRODUTOIMAGEM
 * 
 * @property int $IMAGEM_ID
 * @property int $IMAGEM_ORDEM
 * @property int $PRODUTO_ID
 * @property string|null $IMAGEM_URL
 * 
 * @property PRODUTO $produto
 *
 * @package App\Models
 */
class PRODUTOIMAGEM extends Model
{
	protected $table = 'PRODUTO_IMAGEM';
	protected $primaryKey = 'IMAGEM_ID';
	public $timestamps = false;

	protected $casts = [
		'IMAGEM_ORDEM' => 'int',
		'PRODUTO_ID' => 'int'
	];

	protected $fillable = [
		'IMAGEM_ORDEM',
		'PRODUTO_ID',
		'IMAGEM_URL'
	];

	public function produto()
	{
		return $this->belongsTo(PRODUTO::class, 'PRODUTO_ID');
	}
}
