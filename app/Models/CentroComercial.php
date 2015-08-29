<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CentroComercial extends Model
{
    protected $table = 'centro_comercial';

    protected $primaryKey = 'id_centro_comercial';

    protected $fillable = ['id_municipio','nombre', 'colonia', 'calle', 'numero', 'CP', 'latitud', 'longitud'];

	public $timestamps = false;    
}
