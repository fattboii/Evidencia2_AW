<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Pedido
 *
 * @property $id
 * @property $numero_pedido
 * @property $id_producto
 * @property $cantidad
 * @property $precio_unitario
 * @property $precio_total
 * @property $status
 * @property $created_at
 * @property $updated_at
 *
 * @property Producto $producto
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Pedido extends Model
{
    
    static $rules = [
		'numero_pedido' => 'required',
		'id_producto' => 'required',
		'cantidad' => 'required',
		'precio_unitario' => 'required',
		'precio_total' => 'required',
		'status' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['numero_pedido','id_producto','cantidad','precio_unitario','precio_total','status'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function producto()
    {
        return $this->hasOne('App\Models\Producto', 'id', 'id_producto');
    }
    

}
