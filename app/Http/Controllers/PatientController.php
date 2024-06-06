<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;

class PatientController extends Controller
{
    // Mostrar todos los pacientes
    public function index()
    {
        $patients = Patient::all();
        return view('patients.index', compact('patients'));
    }

    // Mostrar el formulario para crear un nuevo paciente
    public function create()
    {
        return view('patients.create');
    }

    // Almacenar un nuevo paciente en la base de datos
    public function store(Request $request)
    {
        $patient = new Patient([
            'apellidos' => $request->get('apellidos'),
            'nombre' => $request->get('nombre'),
            'direccion' => $request->get('direccion'),
            'codigo_postal' => $request->get('codigo_postal'),
            'localidad' => $request->get('localidad'),
            'provincia' => $request->get('provincia'),
            'fecha_nacimiento' => $request->get('fecha_nacimiento'),
            'sexo' => $request->get('sexo'),
            'num_seguro_social' => $request->get('num_seguro_social'),
            'telefono' => $request->get('telefono'),
            'fecha_consulta' => $request->get('fecha_consulta'),
            'fecha_alta' => $request->get('fecha_alta'),
            'diagnostico' => $request->get('diagnostico'),
            'tratamiento' => $request->get('tratamiento'),
            'notas_observaciones' => $request->get('notas_observaciones')
        ]);
        $patient->save();
        return redirect('/patients')->with('success', 'Paciente añadido correctamente');
    }

    // Mostrar los detalles de un paciente específico
    public function show($id)
    {
        $patient = Patient::find($id);
        return view('patients.show', compact('patient'));
    }

    // Mostrar el formulario para editar un paciente
    public function edit($id)
    {
        $patient = Patient::find($id);
        return view('patients.edit', compact('patient'));
    }

    // Actualizar un paciente específico en la base de datos
    public function update(Request $request, $id)
    {
        $patient = Patient::find($id);
        $patient->update($request->all());
        return redirect('/patients')->with('success', 'Paciente actualizado correctamente');
    }

    // Eliminar un paciente específico de la base de datos
    public function destroy($id)
    {
        $patient = Patient::find($id);
        $patient->delete();
        return redirect('/patients')->with('success', 'Paciente eliminado correctamente');
    }
}
