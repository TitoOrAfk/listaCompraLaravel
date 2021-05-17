<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProductoController extends Controller
{

    //Index
    public function getIndex()
    {
        $productos = Producto::get();

        return view('productos.index', ['productos' => $productos]);
    }

    //Show
    public function getShow($id)
    {
        $producto = Producto::findOrFail($id);
        return view('productos.show', ['producto' => $producto, 'id' => $id]);
    }

    //Edit
    public function getEdit($id)
    {
        $producto = Producto::findOrFail($id);
        return view('productos.edit', ['producto' => $producto, 'id' => $id]);
    }

    public function putEdit(Request $request){

        $id = $request->input('id');

        $producto = Producto::findOrFail($id);

        $producto->nombre = $request->input('nombre');
        $producto->precio = $request->input('precio');
        $producto->categoria = $request->input('categoria');
        $producto->imagen = $request->input('imagen');
        $producto->descripcion = $request->input('descripcion');
        $producto->save();

        return redirect('/productos/show/'.$id);
    }

    //Create
    public function getCreate()
    {
        return view('productos.create');
    }

    public function postCreate(Request $request){

        $producto = new Producto();

        $producto->nombre = $request->input('nombre');
        $producto->precio = $request->input('precio');
        $producto->categoria = $request->input('categoria');
        $producto->imagen = $request->input('imagen');
        $producto->descripcion = $request->input('descripcion');
        $producto->save();

        return redirect('/productos');
    }

}
