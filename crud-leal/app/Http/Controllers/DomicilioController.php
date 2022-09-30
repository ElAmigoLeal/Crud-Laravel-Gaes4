<?php

namespace App\Http\Controllers;

use App\Models\Domicilio;
use Illuminate\Http\Request;

class DomicilioController extends Controller
{
  /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $domicilio = Domicilio::all();
        return view('Domicilios.index')->with('domicilio',$domicilio);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('domicilios.create');
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
        $domicilio = new Domicilio();
        $domicilio-> idCarro =$request -> get ('idCarro');
        $domicilio-> descripcion =$request -> get ('descripcion');

        $domicilio->save();

        return redirect('/domicilios');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Domicilio  $domicilio
     * @return \Illuminate\Http\Response
     */
    public function show(Domicilio $domicilio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Domicilio  $domicilio
     * @return \Illuminate\Http\Response
     */
    public function edit($idDomicilio)
    {
        //
        $domicilio = Domicilio::find($idDomicilio);
        return view('Domicilios.edit')->with('domicilio',$domicilio);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Domicilio  $domicilio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idDomicilio)
    {
        //
        $domicilio = Domicilio::find($idDomicilio);
        $domicilio-> idCarro =$request -> get ('idCarro');
        $domicilio->descripcion = $request->get('descripcion');
       
        
        $domicilio->update();

        return redirect('/domicilios');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Domicilio  $domicilio
     * @return \Illuminate\Http\Response
     */
    public function destroy($idDomicilio)
    {
        //
        $domicilio = Domicilio::find($idDomicilio);
        $domicilio->delete();

        return redirect('/domicilios');
    }
}
