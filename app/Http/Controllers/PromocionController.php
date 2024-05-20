<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Promocion;

class PromocionController extends Controller
{
    public function index()
    {
        $promocions = Promocion::all();
        return view('promocions.index', compact('promocions'));
    }
 
    public function create()
    {
        return view('promocions.create');
    }
 
    public function store(Request $request)
    {
        $request->validate([
            'nro_promocion' => 'required|string|max:4|unique:promocions',
            'tipo_viaje' => 'required|string|max:50',
            'costo' => 'required|decimal:8,2',
            
        ]);
 
        Promocion::create($request->all());
 
        return redirect()->route('promocions.index')->with('success', 'Promocion creado exitosamente.');
    }
 
    public function show(Promocion $promocion)
    {
        return view('promocions.show', compact('promocion'));
    }
 
    public function edit(Promocion $promocion)
    {
        return view('promocions.edit', compact('promocion'));
    }
 
    /**public function update(Request $request, Persona $persona)
    {
        $request->validate([
            'dni' => 'required|string|max:8|unique:personas,dni,' . $persona->dni,
            'estado' => 'required|boolean',
            'ruc' => 'nullable|string|max:11|unique:personas,ruc,' . $persona->dni,
            'apellido_paterno' => 'required|string|max:50',
            'apellido_materno' => 'required|string|max:50',
            'nombres' => 'required|string|max:50',
            'edad' => 'required|integer',
            'sexo' => 'required|string|max:1',
            'foto' => 'nullable|string|max:255',
            'email' => 'required|string|email|max:100|unique:personas,email,' . $persona->dni,
        ]);
 
        $persona->update($request->all());
 
        return redirect()->route('personas.index')->with('success', 'Persona actualizada exitosamente.');
    }*/
 
    public function update(Request $request, Promocion $promocion)
    {
        // Validar la entrada
        $request->validate([
            'nro_promocion' => 'required|string|max:4|unique:promocions',
            'tipo_viaje' => 'required|string|max:50',
            'costo' => 'required|decimal|max:8,2',
        ]);
 
        // Procesar la imagen si se ha subido
        if ($request->hasFile('imagen')) {
            $file = $request->file('imagen');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('images'), $filename);
            $persona->foto = $filename;
        }
 
        // Actualizar los datos del cliente
        $promocion->nro_promocion = $request->nro_promocion;
        $promocion->tipo_viaje = $request->tipo_viaje;
        $promocion->costo = $request->costo;
        $promocion->save();
 
        return redirect()->route('promocions.index')->with('success', 'Promocion actualizado correctamente');
    }
 
    public function destroy(Promocion $promocion)
    {
        $promocion->delete();
 
        return redirect()->route('promocions.index')->with('success', 'Promocion eliminado exitosamente.');
    }
}

