@extends('layouts.admin')

@section('main-content')
    <h1 class="h3 mb-4 text-gray-800">Agregar Promocion</h1>

    <div class="card shadow mb-4">
        <div class="card-body">
            <form method="POST" action="{{ route('promocions.store') }}">
                @csrf
                <div class="form-group">
                    <label for="nro_promocion">Nro Promocion</label>
                    <input type="text" class="form-control" id="nro_promocion" name="nro_promocion" required>
                </div>
                <div class="form-group">
                    <label for="tipo_viaje">Tipo Viaje</label>
                    <input type="text" class="form-control" id="tipo_viaje" name="tipo_viaje" required>
                </div>
                <div class="form-group">
                    <label for="costo">Costo</label>
                    <input type="text" class="form-control" id="costo" name="costo" required>
                </div>
                
                
                <div class="text-center">
                    <button type="submit" class="btn btn-primary mr-2">Agregar Promocion</button>
                    <a href="{{ route('promocions.index') }}" class="btn btn-secondary">Regresar</a>
                </div>
            </form>
        </div>
    </div>
@endsection



