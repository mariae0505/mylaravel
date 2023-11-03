<?php

namespace App\Http\Controllers;

use App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Abogado;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class AbogadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() //Leer todos los registros
    {
        //
        $abogados=Abogado::all();
           //dd($abogados);
        return view('abogados.index',compact('abogados'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() //Abrir form para un nuevo registro
    {
        //
        return view('abogados.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) // guardar en bd el nuevo registro 
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Abogado $abogado)  //visualizar un solo registro a detalle 
    {
        //
        return view('abogados.show');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  Abogado $abogado
     * @return \Illuminate\Http\Response
     */
    public function edit(Abogado $abogado) // Abrir formulario para edicion de unregistro
    {
        //
        return view('abogados.edit');

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) //actualizar la info del registro 
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) // eliminar un registro 
    {
        //
    }
}
