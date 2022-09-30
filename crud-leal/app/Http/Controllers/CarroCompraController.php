<?php

namespace App\Http\Controllers;

use App\Models\CarroCompra;
use Illuminate\Http\Request;

class CarroCompraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carrocompra = CarroCompra::all();
        return view('CarroCompra.index')->with('carrocompra',$carrocompra);
    }
     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('CarroCompra.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $carrocompra = new CarroCompra();
        $carrocompra-> idUsuario =$request -> get ('idUsuario');
        $carrocompra-> precio =$request -> get ('precio');
        $carrocompra-> cantidad =$request -> get ('cantidad');
        $carrocompra-> cantidadPagar =$request -> get ('cantidadPagar');
        $carrocompra-> estado =$request -> get ('estado');

        $carrocompra->save();

        return redirect('/carrocompras');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($idCarro)
    {
        $carrocompra = CarroCompra::find($idCarro);
         return view('CarroCompra.edit')->with('carrocompra',$carrocompra);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idCarro)
    {
        $carrocompra = CarroCompra::find($idCarro);
        $carrocompra-> idUsuario =$request -> get ('idUsuario');
        $carrocompra-> precio =$request -> get ('precio');
        $carrocompra-> cantidad =$request -> get ('cantidad');
        $carrocompra-> cantidadPagar =$request -> get ('cantidadPagar');
        $carrocompra-> estado =$request -> get ('estado');
       
        $carrocompra->update();

        return redirect('/carrocompras');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($idCarro)
    {
        $carrocompra = CarroCompra::find($idCarro);
        $carrocompra->delete();

        return redirect('/carrocompras');
    }
}
