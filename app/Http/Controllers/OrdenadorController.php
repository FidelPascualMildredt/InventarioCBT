<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ordenador;

class OrdenadorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $ordenadors = Ordenador::all();
        return view('ordenadores.index', compact('ordenadors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('ordenadores.create');
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
        $datosOrdenadors = $request->except('_token');
        Ordenador::insert($datosOrdenadors);
        return redirect('ordenadores')->with('mensaje', 'Ordenador agregado con éxito');
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
        $ordenador = Ordenador::find($id);
        return view('ordenadores.edit', compact('ordenador'));
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
        $datosOrdenadors = $request->except(['_token', '_method']);
        Ordenador::where('id', $id)->update($datosOrdenadors);
        $ordenadors = Ordenador::findOrFail($id);
        return view('ordenadores.edit', compact('ordenadors'));
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
        $ordenador = Ordenador::find($id);
        $ordenadors->delete();
        return redirect('ordenadors')->with('mensaje', 'Ordenador borrado');
    }
}
