<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mascota;

class MascotaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $mascotas = Mascota::all();
        return view('mascota.index')->with('mascotas',$mascotas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('mascota.create');
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
        $mascota = new Mascota();

        $mascota->nombre = $request->get('nombre');
        $mascota->descripcion = $request->get('descripcion');
        $mascota->tamanio = $request->get('tamanio');
        $mascota->id_refugio = $request->get('id_refugio');
        $mascota->id_tipo_mascota = $request->get('id_tipo_mascota');

        $mascota->save();

        return redirect('/mascotas');
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
    public function edit($id)
    {
        //
        $mascota = Mascota::find($id);
        return view('mascota.edit')->with('mascota',$mascota);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $mascota = Mascota::find($id);

        $mascota->nombre = $request->get('nombre');
        $mascota->descripcion = $request->get('descripcion');
        $mascota->tamanio = $request->get('tamanio');
        $mascota->id_refugio = $request->get('id_refugio');
        $mascota->id_tipo_mascota = $request->get('id_tipo_mascota');

        $mascota->save();

        return redirect('/mascotas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $mascota = Mascota::find($id);
        $mascota->delete();

        return redirect('/mascotas');
    }
}
