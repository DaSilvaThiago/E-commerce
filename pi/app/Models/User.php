<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class USUARIO
 * 
 * @property int $USUARIO_ID
 * @property string $USUARIO_NOME
 * @property string $USUARIO_EMAIL
 * @property string $USUARIO_SENHA
 * @property string $USUARIO_CPF
 * 
 * @property CARRINHOITEM $carrinhoItem
 * @property Collection|ENDERECO[] $enderecos
 * @property Collection|PEDIDO[] $pedidos
 *
 * @package App\Models
 */

class User extends Authenticatable
{
	protected $table = 'USUARIO';
	protected $primaryKey = 'USUARIO_ID';
	public $timestamps = false;

	protected $fillable = [
		'USUARIO_NOME',
		'USUARIO_EMAIL',
		'USUARIO_SENHA',
		'USUARIO_CPF'
	];

	public function carrinhoItem()
	{
		return $this->hasOne(CARRINHOITEM::class, 'USUARIO_ID');
	}

	public function enderecos()
	{
		return $this->hasMany(ENDERECO::class, 'USUARIO_ID');
	}

	public function pedidos()
	{
		return $this->hasMany(PEDIDO::class, 'USUARIO_ID');
	}
}