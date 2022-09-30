<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Domicilio extends Model
{
    protected $table = 'domicilios';
    protected $fillable = ['idCarro, descripcion'];
    protected $guarded = ['idDomicilio'];
    protected $primaryKey = 'idDomicilio';
    public $timestamps = false;
}
