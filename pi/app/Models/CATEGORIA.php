<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CATEGORIUM
 * 
 * @property int $CATEGORIA_ID
 * @property string $CATEGORIA_NOME
 * @property string $CATEGORIA_DESC
 * @property bool|null $CATEGORIA_ATIVO
 * 
 * @property Collection|PRODUTO[] $p_r_o_d_u_t_o_s
 *
 * @package App\Models
 */
class CATEGORIA extends Model
{
	protected $table = 'CATEGORIA';
	protected $primaryKey = 'CATEGORIA_ID';
	public $timestamps = false;

	protected $casts = [
		'CATEGORIA_ATIVO' => 'bool'
	];

	protected $fillable = [
		'CATEGORIA_NOME',
		'CATEGORIA_DESC',
		'CATEGORIA_ATIVO'
	];

	public function produtos()
	{
		return $this->hasMany(PRODUTO::class, 'CATEGORIA_ID');
	}
}
