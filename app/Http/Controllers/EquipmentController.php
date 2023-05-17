<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Equipment;
use App\Models\Keyboard;
use App\Models\Monitor;
use App\Models\Mouse;
use App\Models\Ordenador;

class EquipmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $equipments = Equipment::all();
        return view('equipments.index', compact('equipments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $equipments = Equipment::all();
        $mouses = Mouse::all();
        $ordenadores = Ordenador::all();
        $keyboards = Keyboard::all();
        $monitors = Monitor::all();

        return view('equipments.create', compact('mouses', 'ordenadores', 'keyboards', 'monitors'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $equipmentData = $request->except('_token');
        Equipment::create($equipmentData);
        return redirect('equipments')->with('mensaje', 'Equipo agregado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $equipment = Equipment::findOrFail($id);
        return view('equipments.show', compact('equipment'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $equipment = Equipment::findOrFail($id);
        $mouses = Mouse::all();
        $ordenadores = Ordenador::all();
        $keyboards = Keyboard::all();
        $monitors = Monitor::all();

        return view('equipments.edit', compact('equipment', 'mouses', 'ordenadores', 'keyboards', 'monitors'));
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
        $equipmentData = $request->except(['_token', '_method']);
        Equipment::where('id', $id)->update($equipmentData);
        $equipment = Equipment::findOrFail($id);
        return view('equipments.edit', compact('equipment'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $equipment = Equipment::findOrFail($id);
        $equipment->delete();
        return redirect('equipments')->with('mensaje', 'Equipment borrado');
    }
}
