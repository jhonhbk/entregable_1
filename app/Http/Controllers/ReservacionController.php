<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservacion;
use App\Models\Cliente;

class ReservacionController extends Controller
{
    public function index()
    {
        $reservacions = Reservacion::with('cliente')->get();
        return view('reservacions.index', compact('reservacions'));
    }

    public function create()
    {
        $clientes = Reservacion::all();
        return view('reservacions.create', compact('clientes'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nro_reservacion' => 'required|string|max:4|unique:reservacions',
            'nro_promocion' => 'required|string|max:4',
            'dni' => 'required|string|max:8',
            'pago_adelantado' => 'required|numeric|max:9999.99',
        ]);

        Reservacion::create($request->all());

        return redirect()->route('reservacions.index')->with('success', 'Reservacion creado exitosamente.');
    }

    public function show(Reservacion $reservacion)
    {
        return view('reservacions.show', compact('reservacion'));
    }

    //public function edit(Docente $docente)
    //{
    //    $personas = Persona::all();
    //    return view('docentes.edit', compact('docente', 'personas'));
    //}

    public function edit($id)
    {
        $reservacion = Reservacion::findOrFail($id);
        $clientes = Cliente::all();
        return view('reservacions.edit', compact('reservacion', 'clientes'));
    }

    public function update(Request $request, $id)
    {
        $reservacion = Reservacion::findOrFail($id);
        $request->validate([
            'nro_reservacion' => 'required|string|max:4|unique:reservacions',
            'nro_promocion' => 'required|string|max:4',
            'dni' => 'required|string|max:8',
            'pago_adelantado' => 'required|decimal|max:4,2',
        ]);

        $reservacion->update($request->all());

        return redirect()->route('reservacions.index')->with('success', 'Reservacion actualizado correctamente.');
    }

    public function destroy(Reservacion $reservacion)
    {
        $reservacion->delete();

        return redirect()->route('reservacions.index')->with('success', 'Reservacion eliminado exitosamente.');
    }
}