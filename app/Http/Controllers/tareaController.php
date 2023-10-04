<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\Tarea;

class tareaController extends Controller
{
    private function tomarDatosDeLaTarea(Request $request){
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

        private function insertarTareaEnLaBaseDeDatos(Request $request){
            $datos = TomarDatosDeLaTarea($request);
            $tarea = New Tarea();
            $tarea = $datos -> titulo;
            $tarea = $datos -> autor;
            $tarea = $datos -> contenido;
            $tarea = $datos -> estado;
            $tarea ->save();
        }
        public function CrearTarea(Request $request){
            tomarDatosDeLaTarea($request);
            insertarTareaEnLaBaseDeDatos($request);
        }

        public function verTodasLasTareas(){
            return Tarea::all();
        }

        public function VerUnaSolaTareaPorId($idDeTarea){
            $tarea = Tarea::findOrFail($idDeTarea);
            return [
                'id' => $idDeTarea,
                'titulo' => $tarea -> titulo,
                'autor' => $tarea -> autor,
                'contenido' =>  $tarea -> contenido,
                'estado' => $tarea -> estado
            ];
        }
}
