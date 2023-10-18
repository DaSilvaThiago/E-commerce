<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class PEDIDOSTATUS
 * 
 * @property int $STATUS_ID
 * @property string $STATUS_DESC
 * 
 * @property Collection|PEDIDO[] $p_e_d_i_d_o_s
 *
 * @package App\Models
 */
class PEDIDOSTATUS extends Model
{
	protected $table = 'PEDIDO_STATUS';
	protected $primaryKey = 'STATUS_ID';
	public $timestamps = false;

	protected $fillable = [
		'STATUS_DESC'
	];

	public function p_e_d_i_d_o_s()
	{
		return $this->hasMany(PEDIDO::class, 'STATUS_ID');
	}
}
