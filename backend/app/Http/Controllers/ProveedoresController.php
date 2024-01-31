<?php

namespace App\Http\Controllers;

use App\Models\Proveedores;
use Illuminate\Http\Request;

class ProveedoresController extends Controller
{
    public function get(){
        $prov=Proveedores::all();
        return $prov;
    }

    public function getOne($id){
        $prov=Proveedores::find($id);
        return $prov;
    }
    public function add(Request $req){
        $prov=new Proveedores();

        $prov->nombres=$req->input('nombres');
        $prov->apellidos=$req->input('apellidos');
        $prov->direccion=$req->input('direccion');
        $prov->correo=$req->input('correo');
        $prov->telefono=$req->input('telefono');
        $prov->id_producto=$req->input('id_producto');
        $prov->fecha=$req->input('fecha');

        $prov->save();
        return true;
    }

    public function update(Request $req, $id){
        $prov=Proveedores::findOrFail($id);

        $prov->nombres=$req->input('nombres');
        $prov->apellidos=$req->input('apellidos');
        $prov->direccion=$req->input('direccion');
        $prov->correo=$req->input('correo');
        $prov->telefono=$req->input('telefono');
        $prov->id_producto=$req->input('id_producto');
        $prov->fecha=$req->input('fecha');

        $prov->save();
        return true;
    }
    public function delete($id){
        $prov=Proveedores::destroy($id);
        return true;
    }
}
