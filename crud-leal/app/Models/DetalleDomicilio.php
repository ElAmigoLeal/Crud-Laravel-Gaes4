<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetalleDomicilio extends Model
{
    protected $table = 'detallesdomicilio';
    protected $fillable = ['idDomicilio, estado, direccion, telefono'];
    protected $guarded = ['id'];
    protected $primaryKey = 'id';
    public $timestamps = false;
}
