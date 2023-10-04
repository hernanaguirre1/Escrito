<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\Tarea;

class tareaController extends Controller
{
    public function TomarDatosDeLaTarea(Request $request){
        $titulo = $request ->post('titulo');
        $autor = $request ->post('autor');
        $contenido = $request ->post('contenido');
        $estado = $request ->post('estado');
        return [
            "titulo" => $titulo,
            "autor" => $autor,
            "contenido" => $contenido,
            "estado" => $estado
        ];
        }

        public function InsertarPersona(Request $request){
            $datos = TomarDatosDeLaTarea($request);
            Tarea::create(
            
            );
        }
}
