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
 * @property PRODUTO $p_r_o_d_u_t_o
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

	public function p_r_o_d_u_t_o()
	{
		return $this->belongsTo(PRODUTO::class, 'PRODUTO_ID');
	}
}
