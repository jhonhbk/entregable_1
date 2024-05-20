@extends('layouts.admin')

@section('main-content')
    <div class="container-fluid">
        <h1 class="h3 mb-4 text-gray-800">{{ __('Editar Ppromocion') }}</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="card shadow mb-4">
            <div class="card-body">
                <form action="{{ route('promocions.update', $promocion) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="nro_promocion">{{ __('Nro Promocion') }}</label>
                        <input type="text" class="form-control" id="nro_promocion" name="nro_promocion" value="{{ old('nro_promocion', $promocion->nro_promocion) }}" required>
                    </div>
                    <div class="form-group">
                        <label for="tipo_viaje">Tipo Viaje</label>
                        <input type="text" class="form-control" id="tipo_viaje" name="tipo_viaje" value="{{ old('tipo_viaje', $promocion->tipo_viaje) }}" required>
                    </div>
                    <div class="form-group">
                        <label for="costo">Costo</label>
                        <input type="text" class="form-control" id="costo" name="costo" value="{{ old('costo', $promocion->costo) }}" required>
                    </div>
                    
          
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">{{ __('Actualizar') }}</button>
                        <a href="{{ route('promocions.index') }}" class="btn btn-secondary ml-2">{{ __('Regresar') }}</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
