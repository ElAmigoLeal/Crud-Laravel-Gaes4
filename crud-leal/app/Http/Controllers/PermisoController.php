<?php

namespace App\Http\Controllers;

use App\Models\Permiso;
use Illuminate\Http\Request;

class PermisoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $permiso = Permiso::all();
        return view('Permisos.index')->with('permiso',$permiso);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('permisos.create');
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
        $permiso = new Permiso();
        $permiso-> descripcion =$request -> get ('descripcion');

        $permiso->save();

        return redirect('/permisos');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Permiso  $permiso
     * @return \Illuminate\Http\Response
     */
    public function show(Permiso $permiso)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Permiso  $permiso
     * @return \Illuminate\Http\Response
     */
    public function edit($idPermiso)
    {
        //
        $permiso = Permiso::find($idPermiso);
        return view('Permisos.edit')->with('permiso',$permiso);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Permiso  $permiso
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idPermiso)
    {
        //
        $permiso = Permiso::find($idPermiso);
        $permiso->descripcion = $request->get('descripcion');
       
        
        $permiso->update();

        return redirect('/permisos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Permiso  $permiso
     * @return \Illuminate\Http\Response
     */
    public function destroy($idPermiso)
    {
        //
        $permiso = Permiso::find($idPermiso);
        $permiso->delete();

        return redirect('/permisos');
    }
}
