<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Personas extends Model
{
    protected $table = 'personas';
    protected $primaryKey = 'id_persona';
    protected $fillable = [
        'identificacion',
        'nombres',
        'apellido_paterno',
        'apellido_materno',
        'direccion',
        'sexo',
        'celular',
        'foto',
        'correo',
        'estado_civil',
        'fecha_nacimiento'
    ];
}
