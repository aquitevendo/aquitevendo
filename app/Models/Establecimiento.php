<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Establecimiento extends Model
{
    protected $table = 'establecimiento';

    protected $primaryKey = 'id_establecimiento';

    protected $fillable = [	'id_centro_comercial',
    					    'id_municipio',
    					    'nombre',
    					    'descripcion',
    					    'slogan',
    					    'CP',
    					    'calle',
    					    'colonia',
    					    'numero',
    					    'n_int',
    					    'telefono',
    					    'logotipo',
    					    'latitud',
    					    'longitud',
    					    'usuario_id_usuario'];

    public $timestamps = false;
}
