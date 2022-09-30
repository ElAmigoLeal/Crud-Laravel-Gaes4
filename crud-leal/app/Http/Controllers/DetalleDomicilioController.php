<?php

namespace App\Http\Controllers;

use App\Models\DetalleDomicilio;
use Illuminate\Http\Request;

class DetalleDomicilioController extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $detalledomicilio = DetalleDomicilio::all();
        return view('DetalleDomicilio.index')->with('detalledomicilio',$detalledomicilio);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('DetalleDomicilio.create');
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
        $detalledomicilio = new DetalleDomicilio();
        $detalledomicilio-> idDomicilio =$request -> get ('idDomicilio');
        $detalledomicilio-> estado =$request -> get ('estado');
        $detalledomicilio-> direccion =$request -> get ('direccion');
        $detalledomicilio-> telefono =$request -> get ('telefono');

        $detalledomicilio->save();

        return redirect('/detalledomicilios');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DetalleDomicilio  $detalleDomicilio
     * @return \Illuminate\Http\Response
     */
    public function show(DetalleDomicilio $detalleDomicilio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DetalleDomicilio  $detalleDomicilio
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $detalledomicilio = DetalleDomicilio::find($id);
        return view('DetalleDomicilio.edit')->with('detalledomicilio',$detalledomicilio);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DetalleDomicilio  $detalleDomicilio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $detalledomicilio = DetalleDomicilio::find($id);
        $detalledomicilio-> idDomicilio =$request -> get ('idDomicilio');
        $detalledomicilio->estado = $request->get('estado');
        $detalledomicilio->direccion = $request->get('direccion');
        $detalledomicilio->telefono = $request->get('telefono');
       
        
        $detalledomicilio->update();

        return redirect('/detalledomicilios');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DetalleDomicilio  $detalleDomicilio
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $detalledomicilio = DetalleDomicilio::find($id);
        $detalledomicilio->delete();

        return redirect('/detalledomicilios');
    }
}
