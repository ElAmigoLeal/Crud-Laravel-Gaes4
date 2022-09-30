<?php

namespace App\Http\Controllers;

use App\Models\Descuento;
use Illuminate\Http\Request;

class DescuentoController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $descuento = Descuento::all();
        return view('Descuentos.index')->with('descuento',$descuento);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Descuentos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $descuento = new Descuento();
        $descuento-> valorDescuento =$request -> get ('valorDescuento');
        $descuento-> fechaDescuento =$request -> get ('fechaDescuento');

        $descuento->save();

        return redirect('/descuentos');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Descuento  $descuento
     * @return \Illuminate\Http\Response
     */
    public function show(Descuento $descuento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Descuento  $descuento
     * @return \Illuminate\Http\Response
     */
    public function edit($idDescuento)
    {
        //
        $descuento = Descuento::find($idDescuento);
         return view('Descuentos.edit')->with('descuento',$descuento);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Descuento  $descuento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idDescuento)
    {
        //
        $descuento = Descuento::find($idDescuento);
        $descuento-> valorDescuento =$request -> get ('valorDescuento');
        $descuento-> fechaDescuento =$request -> get ('fechaDescuento');
       
        
        $descuento->update();

        return redirect('/descuentos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Descuento  $descuento
     * @return \Illuminate\Http\Response
     */
    public function destroy($idDescuento)
    {
        //
        $descuento = Descuento::find($idDescuento);
        $descuento->delete();

        return redirect('/descuentos');
    }
}
