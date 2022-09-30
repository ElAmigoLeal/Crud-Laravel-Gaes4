<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $producto = Producto::all();
        return view('Productos.index')->with('producto',$producto);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('productos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $producto = new producto();
        $producto-> idCategoria =$request -> get ('idCategoria');
        $producto-> idDescuento =$request -> get ('idDescuento');
        $producto-> nombreProducto =$request -> get ('nombreProducto');
        $producto-> precioproducto =$request -> get ('precioproducto');
        $producto-> descripcion =$request -> get ('descripcion');

        $producto->save();

        return redirect('/productos');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit ($idProducto)
    {
        $producto = producto::find($idProducto);
        return view('Productos.edit')->with('producto',$producto);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idProducto)
    {
        $producto =  producto::find($idProducto);
        $producto-> idCategoria =$request -> get ('idCategoria');
        $producto-> idDescuento =$request -> get ('idDescuento');
        $producto-> nombreProducto =$request -> get ('nombreProducto');
        $producto-> precioproducto =$request -> get ('precioproducto');
        $producto-> descripcion =$request -> get ('descripcion');

        $producto->save();

        return redirect('/productos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($idProducto)
    {
        $producto = producto::find($idProducto);
        $producto->delete();

        return redirect('/productos');
    }
}
