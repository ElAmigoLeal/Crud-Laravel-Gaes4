<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarroCompra extends Model
{
    protected $table = 'carrocompras';
    protected $fillable = ['idUsuario, precio, cantidad, cantidadPagar, estado'];
    protected $guarded = ['idCarro'];
    protected $primaryKey = 'idCarro';
    public $timestamps = false;
}
