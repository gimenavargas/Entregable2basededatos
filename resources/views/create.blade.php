<!-- resources/views/patients/create.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Nuevo Paciente</h2>
        <form action="{{ route('patients.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label>Apellidos:</label>
                <input type="text" name="apellidos" class="form-control">
            </div>
            <!-- Agrega más campos del formulario según tus necesidades -->
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
@endsection
