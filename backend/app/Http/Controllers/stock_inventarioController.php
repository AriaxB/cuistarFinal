<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\stock_inventario;
use Illuminate\Http\Request;

class stock_inventarioController extends Controller
{
    public function get(){
        $inventari=stock_inventario::all();
        return $inventari;
    }
    public function getOne($id){
        $inventari=stock_inventario::find($id);
        return $inventari;
    }
    public function add(Request $req){
    $inventari=new stock_inventario();
    $inventari->id_inventario=$req->input('nombre');
    $inventari->id_producto=$req->input('id_producto');
    $inventari->fecha=$req->input('fecha');
    $inventari->cantidad_actual=$req->input('antidad_actual');
    $inventari->entradas=$req->input('entradas');
    $inventari->id_salidas=$req->input('id_salidas');
    $inventari->precio_total=$req->input('precio_total');
    $inventari->save();
    return true;
    }
    public function update(Request $req,$id){
        $inventari=stock_inventario::findOrFail($id);
        $inventari=new stock_inventario();
    $inventari->id_inventario=$req->input('nombre');
    $inventari->id_producto=$req->input('id_producto');
    $inventari->fecha=$req->input('fecha');
    $inventari->cantidad_actual=$req->input('antidad_actual');
    $inventari->entradas=$req->input('entradas');
    $inventari->id_salidas=$req->input('id_salidas');
    $inventari->precio_total=$req->input('precio_total');
    $inventari->save();
    return true;
    }
    public function delete($id){
        $inventari=stock_inventario::destroy($id);
        return true;
    }



}

