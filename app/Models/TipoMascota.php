<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoMascota extends Model
{
    use HasFactory;

    protected $fillable = ['nombre','descripcion','tamanio','id_refugio','id_tipo_mascota'];


}
