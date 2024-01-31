<?php

namespace App\Http\Controllers;

use App\Models\Mascotas;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MascotasController extends Controller
{
    
            public function get(){
                $mascot = Mascotas::all();
                return $mascot;
            }

            public function getOne($id){
                $mascot = Mascotas::find($id);
                return $mascot;
            }

            public function add(Request $request){
                $mascot = new Mascotas();

                $mascot->id_usuario = $request->input('id_usuario');
                $mascot->id_genero = $request->input('id_genero');
                $mascot->nombre_mascota = $request->input('nombre_mascota');
                $mascot->edad_mascota = $request->input('edad_mascota');
                $mascot->id_peso = $request->input('id_peso');
                $mascot->raza = $request->input('raza');
                $mascot->id_categoria = $request->input('id_categoria');
                $mascot->id_estatura = $request->input('id_estatura');

                $mascot->save();
                return true;
            }
            public function update(Request $request, $id){
                $mascot = Mascotas::findOrFail($id);

                $mascot->id_usuario = $request->input('id_usuario');
                $mascot->id_genero = $request->input('id_genero');
                $mascot->nombre_mascota = $request->input('nombre_mascota');
                $mascot->edad_mascota = $request->input('edad_mascota');
                $mascot->id_peso = $request->input('id_peso');
                $mascot->raza = $request->input('raza');
                $mascot->id_categoria = $request->input('id_categoria');
                $mascot->id_estatura = $request->input('id_estatura');

                $mascot->save();
                return true;
            }
            public function delete($id){
                $mascot = Mascotas::destroy($id);
                return true;
            }
    }

