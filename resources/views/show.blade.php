<!-- resources/views/patients/show.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Detalles del Paciente</h2>
        <p><strong>Apellidos:</strong> {{ $patient->apellidos }}</p>
        <!-- Muestra más detalles del paciente según tus necesidades -->
        <a href="{{ route('patients.edit', $patient->id) }}" class="btn btn-warning">Editar</a>
        <form action="{{ route('patients.destroy', $patient->id) }}" method="POST" style="display: inline;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Eliminar</button>
        </form>
    </div>
@endsection
