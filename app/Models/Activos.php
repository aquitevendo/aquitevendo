<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Activos extends Model
{
    protected $table = 'activo';

    protected $primaryKey = 'id_activo';

    protected $fillable = ['tipo_activo','nombre', 'descripcion', 'precio'];

	public $timestamps = false;    
}
