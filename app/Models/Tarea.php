<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarea extends Model
{
    use HasFactory;
    protected filable $Titulo = Titulo;
    protected filable $Autor = autor;
    protected filable $Contenido = Contenido;
    protected filable $Estado = Estado;
}
