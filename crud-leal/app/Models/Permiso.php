<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permiso extends Model
{
    protected $table = 'permisos';
    protected $fillable = ['descripcion'];
    protected $guarded = ['idPermiso'];
    protected $primaryKey = 'idPermiso';
    public $timestamps = false;
}
