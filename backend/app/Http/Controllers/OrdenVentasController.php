<?php

namespace App\Http\Controllers;

use App\Models\Orden_Ventas;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrdenVentasController extends Controller
{

    public function getOrdenVentas()
    {
        $orden_ventas = Orden_Ventas::all();
        return $orden_ventas;
    }

    public function getOrdenVentaOne($id)
    {
        $orden_venta = Orden_Ventas::find($id);
        return $orden_venta;
    }

    public function addOrdenVenta(Request $request)
    {

            $orden_venta = new Orden_Ventas;
            $orden_venta->id_inventario = $request->input('id_inventario');
            $orden_venta->fecha = $request->input('fecha');
            $orden_venta->cantidas_productos = $request->input('cantidas_productos');
            $orden_venta->id_salida = $request->input('id_salida');
            $orden_venta->precio_total = $request->input('precio_total');
            $orden_venta->descripcion = $request->input('descripcion');
            $orden_venta->id_tipo_pago = $request->input('id_tipo_pago');
            $orden_venta->id_usuario = $request->input('id_usuario');
            $orden_venta->save();

            return true;

    }


    public function updateOrdenVenta(Request $request, $id)
    {

            $orden_venta = Orden_Ventas::findOrFail($id);
            $orden_venta->id_inventario = $request->input('id_inventario');
            $orden_venta->fecha = $request->input('fecha');
            $orden_venta->cantidas_productos = $request->input('cantidas_productos');
            $orden_venta->id_salida = $request->input('id_salida');
            $orden_venta->precio_total = $request->input('precio_total');
            $orden_venta->descripcion = $request->input('descripcion');
            $orden_venta->id_tipo_pago = $request->input('id_tipo_pago');
            $orden_venta->id_usuario = $request->input('id_usuario');
            $orden_venta->save();

            return true;

    }


    public function deleteOrdenVenta($id)
    {
        $orden_venta = Orden_Ventas::destroy($id);
        return true;
    }

}
