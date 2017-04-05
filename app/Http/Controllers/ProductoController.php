<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;

class ProductoController extends Controller
{

    public function create()
    {

        
        return view('productos.create');

    }


    public function store(Request $request)
    {
         //
        $validator = \Validator::make($request->all(), [
            'nombre'        => 'required',
            'descripcion'        => 'required',
            
        ]);
        if ($validator->fails()) {
            return redirect('productos')
                        ->withErrors($validator)
                        ->withInput();
        }


        $producto = new Producto;
        $producto->nombre = $request->input('nombre');
        $producto->descripcion = $request->input('descripcion');
        $producto->save();

        return redirect('home')->with('success', 'Se ha creado el usuario correctamente.');


    }


    public function edit($id)
    {
        $producto = Producto::find($id);
        return view('productos.edit')->with('producto', $producto);
    }

    public function update(Request $request)
    {

        $validator = \Validator::make($request->all(), [
            'nombre'        => 'required',
            'descripcion'        => 'required',
            
        ]);
        if ($validator->fails()) {
            return redirect('productos')
                        ->withErrors($validator)
                        ->withInput();
        }

            $producto = Producto::find($request->id);
            $producto->nombre   = $request->input('nombre');
            $producto->descripcion  = $request->input('descripcion');
         
            $producto->save();
           
            return redirect('home')->with('message', 'editado');

    }

    public function delete($id)
    {
        // delete
        $producto = Producto::find($id);
        $producto->delete();

        // redirect
     
        return Redirect('home');

    }

}
