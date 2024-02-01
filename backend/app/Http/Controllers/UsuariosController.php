<?php

namespace App\Http\Controllers;

use App\Models\Usuarios;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    public function get(){
        $user=Usuarios::all();
        return $user;
    }

    public function getOne($id){
        $user=Usuarios::find($id);
        return $user;
    }
    public function add(Request $req){
        $user=new Usuarios();

        $user->nombres=$req->input('nombres');
        $user->apellidos=$req->input('apellidos');
        $user->correo=$req->input('correo');
        $user->contrasena=$req->input('contrasena');
        $user->telefono=$req->input('telefono');
        $user->id_roll=$req->input('id_roll');
        $user->id_ciudad=$req->input('id_ciudad');
        $user->cedula=$req->input('cedula');

        $user->save();
        return true;
    }

    public function update(Request $req, $id){
        $user=Usuarios::findOrFail($id);

        $user->nombres=$req->input('nombres');
        $user->apellidos=$req->input('apellidos');
        $user->correo=$req->input('correo');
        $user->contrasena=$req->input('contrasena');
        $user->telefono=$req->input('telefono');
        $user->id_roll=$req->input('id_roll');
        $user->id_ciudad=$req->input('id_ciudad');
        $user->cedula=$req->input('cedula');

        $user->save();
        return true;
    }

    public function delete($id){
        $user=Usuarios::destroy($id);
        return true;
    }

}
