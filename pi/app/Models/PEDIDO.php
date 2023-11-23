<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class PEDIDO
 * 
 * @property int $PEDIDO_ID
 * @property int $USUARIO_ID
 * @property int $ENDERECO_ID
 * @property int $STATUS_ID
 * @property Carbon $PEDIDO_DATA
 * 
 * @property ENDERECO $endereco
 * @property PEDIDOSTATUS $pedidoStatus
 * @property USUARIO $usuario
 * @property PEDIDOITEM $pedidoItem
 *
 * @package App\Models
 */
class PEDIDO extends Model
{
	protected $table = 'PEDIDO';
	protected $primaryKey = 'PEDIDO_ID';
	public $timestamps = false;

	protected $casts = [
		'USUARIO_ID' => 'int',
		'ENDERECO_ID' => 'int',
		'STATUS_ID' => 'int',
		'PEDIDO_DATA' => 'datetime'
	];

	protected $fillable = [
		'USUARIO_ID',
		'ENDERECO_ID',
		'STATUS_ID',
		'PEDIDO_DATA'
	];

	public function endereco()
	{
		return $this->belongsTo(ENDERECO::class, 'ENDERECO_ID');
	}

	public function pedidoStatus()
	{
		return $this->belongsTo(PEDIDOSTATUS::class, 'STATUS_ID');
	}

	public function usuario()
	{
		return $this->belongsTo(User::class, 'USUARIO_ID');
	}

	public function pedidoItem()
	{
		return $this->hasOne(PEDIDOITEM::class, 'PEDIDO_ID');
	}
	
}


