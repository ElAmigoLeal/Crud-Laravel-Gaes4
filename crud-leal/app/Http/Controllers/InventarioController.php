<?php

namespace App\Http\Controllers;

use App\Models\Inventario;
use Illuminate\Http\Request;

class InventarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $inventario = Inventario::all();
        return view('Inventario.index')->with('inventario',$inventario);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('inventarios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $inventario = new Inventario();
        $inventario-> idProducto =$request -> get ('idUsuario');
        $inventario-> Producto =$request -> get ('Producto');
        $inventario-> cantidad =$request -> get ('cantidad');
        
        $inventario->save();

        return redirect('/inventarios');
    }

    /**
     * Display the specified resource.
     *
     *  @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show( $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($idInventario)
    {
        $inventario = Inventario::find($idInventario);
         return view('Inventario.edit')->with('inventario',$inventario);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $idInventario)
    {
        $inventario = Inventario::find($idInventario);
        $inventario-> idProducto =$request -> get ('idUsuario');
        $inventario-> Producto =$request -> get ('Producto');
        $inventario-> cantidad =$request -> get ('cantidad');
        
        $inventario->update();

        return redirect('/inventarios');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Inventario  $inventario
     * @return \Illuminate\Http\Response
     */
    public function destroy($idInventario)
    {
        $inventario = Inventario::find($idInventario);
        $inventario->delete();

        return redirect('/inventarios');
    }
}
