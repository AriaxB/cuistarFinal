<?php

namespace App\Http\Controllers;

use App\Models\Pqrs;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PqrsController extends Controller
{

        public function get(){
            $pq = Pqrs::all();
            return $pq;
        }

        public function getOne($id){
            $pq = Pqrs::find($id);
            return $pq;
        }

        public function add(Request $request){
            $pq = new Pqrs();

            $pq->id_usuario = $request->input('id_usuario');
            $pq->id_tipo = $request->input('id_tipo');
            $pq->asunto = $request->input('asunto');
            $pq->fecha = $request->input('fecha');
            $pq->evidencia = $request->input('evidencia');
            $pq->respuesta = $request->input('respuesta');
            $pq->id_estado = $request->input('id_estado');

            $pq->save();
            return true;
        }

        public function update(Request $request, $id){
            $pq = Pqrs::findOrFail($id);

            $pq->id_usuario = $request->input('id_usuario');
            $pq->id_tipo = $request->input('id_tipo');
            $pq->asunto = $request->input('asunto');
            $pq->fecha = $request->input('fecha');
            $pq->evidencia = $request->input('evidencia');
            $pq->respuesta = $request->input('respuesta');
            $pq->id_estado = $request->input('id_estado');

            $pq->save();
            return true;
        }

        public function delete($id){
            $pq = Pqrs::destroy($id);
            return true;
        }
     }

