<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedidos extends Model
{
    protected $table = 'pedidos';
    protected $primaryKey = 'id';
    protected $fillable = [
        'status_pedido', 'clientes_id', 'produtos_id', 'vendedor_id'
    ];

    public function clientes(){
        return $this->hasOne('App\Cliente', 'id', 'clientes_id');
    }
    public function produtos(){
        return $this->hasOne('App\Produto', 'id', 'produtos_id');
    }
    public function vendedor(){
        return $this->hasOne('App\Vendedor', 'id', 'vendedor_id');
    }
}
