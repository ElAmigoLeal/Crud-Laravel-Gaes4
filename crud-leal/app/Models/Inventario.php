<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventario extends Model
{
    protected $table = 'inventarios';
    protected $fillable = ['idProducto, Producto, cantidad'];
    protected $guarded = ['idInventario'];
    protected $primaryKey = 'idInventario';
    public $timestamps = false;
}
