<?php

namespace App\Http\Controllers;

use App\Models\Sensor;
use Illuminate\Http\Request;

class SensorController extends Controller
{
    /**
     * Muestra la lista de sensores.
     */
    public function index()
    {
        $sensores = Sensor::all(); // Obtén todos los sensores de la base de datos
        return view('admin.sensores.index', compact('sensores'));
    }

    /**
     * Muestra el formulario para crear un nuevo sensor.
     */
    public function create()
    {
        return view('admin.sensores.create');
    }

    /**
     * Guarda un nuevo sensor en la base de datos.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            // Añade aquí otras validaciones según las propiedades del sensor
        ]);

        $sensor = new Sensor([
            'nombre' => $request->nombre,
            // Añade aquí otras propiedades
        ]);
        $sensor->save();

        return redirect()->route('sensores.index')->with('success', 'Sensor añadido correctamente.');
    }

    // Aquí podrías añadir métodos adicionales como edit(), update(), destroy() si necesitas
}
