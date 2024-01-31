<?php

namespace App\Http\Controllers;

use App\Models\productos;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductosController extends Controller
{

 public function get(){
    $produc=productos::all();
    return $produc;
 }
 public function getOne($id){
    $produc=productos::find($id);
    return $produc;
 }
public function add(Request $req){
    $produc=new productos();
    $produc->id_productos=$req->input('id_productos');
    $produc->nombre_producto=$req->input('nombre_producto');
    $produc->descripcion_producto=$req->input('descripcion_producto');
    $produc->id_tipoprodu=$req->input('id_tipoprodu');
    $produc->id_unidadmedida=$req->input('id_unidadmedida');
    $produc->precio_unitario=$req->input('precio_unitario');
    $produc->id_categoria=$req->input('id_categoria');
    $produc->id_tallas=$req->input('id_tallas');
    $produc->imagen=$req->input('imagen');
    $produc->save();
    return true;
}
public function update(Request $req,$id){
    $produc=productos::findOrFail($id);
    $produc->id_productos=$req->input('id_productos');
    $produc->nombre_producto=$req->input('nombre_producto');
    $produc->descripcion_producto=$req->input('descripcion_producto');
    $produc->id_tipoprodu=$req->input('id_tipoprodu');
    $produc->id_unidadmedida=$req->input('id_unidadmedida');
    $produc->precio_unitario=$req->input('precio_unitario');
    $produc->id_categoria=$req->input('id_categoria');
    $produc->id_tallas=$req->input('id_tallas');
    $produc->imagen=$req->input('imagen');
    $produc->save();
    return $produc;
}
public function delete($id){
    $produc=productos::destroy($id);
    return true;
}
}
