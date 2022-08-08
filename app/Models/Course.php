<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    //añado permisos para manipular datos de la tabla
    protected $fillable = ['nombre','descripcion','imagen','duracion'];
}
