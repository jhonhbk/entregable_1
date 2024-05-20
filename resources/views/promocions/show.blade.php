@extends('layouts.admin')

@section('main-content')
    <div class="container-fluid">
        <h1 class="h3 mb-4 text-gray-800">{{ __('Ver Promocion') }}</h1>

        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="form-group">
                    <label for="nro_promocion">{{ __('Nro Promocion') }}</label>
                    <input type="text" class="form-control" id="nro_promocion" value="{{ $promocion->nro_promocion }}" readonly>
                </div>
                <div class="form-group">
                    <label for="tipo_viaje">{{ __('Tipo Viaje') }}</label>
                    <input type="text" class="form-control" id="tipo_viaje" value="{{ $promocion->tipo_viaje }}" readonly>
                </div>
                <div class="form-group">
                    <label for="costo">{{ __('Costo') }}</label>
                    <input type="text" class="form-control" id="costo" value="{{ $promocion->costo }}" readonly>
                </div>
                
                <a href="{{ route('promocions.index') }}" class="btn btn-secondary">{{ __('Volver') }}</a>
            </div>
        </div>
    </div>
@endsection
