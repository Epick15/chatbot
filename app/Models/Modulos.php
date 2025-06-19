<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Modulos extends Model
{
    protected $table = 'modulos';
    protected $fillable = ['name', 'orden', 'icon', 'to', 'heading', 'parent_id'];

    public function submodulos()
    {
        return $this->hasMany(Modulos::class, 'parent_id', 'id_modulo')->orderBy('orden');
    }
}
