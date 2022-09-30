<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = 'productos';
    protected $fillable = ['idCategoria, idDescuento, nombreProducto, precioproducto, descripcion'];
    protected $guarded = ['idProducto'];
    protected $primaryKey = 'idProducto';
    public $timestamps = false;
}
