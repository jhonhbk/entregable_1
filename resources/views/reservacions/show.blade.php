@extends('layouts.admin')

@section('main-content')
    <div class="container-fluid">
        <h1 class="h3 mb-4 text-gray-800">{{ __('Detalle del Reservacion') }}</h1>

        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="form-group">
                    <label for="nro_reservacion">{{ __('Nro Reservacion') }}</label>
                    <p>{{ $reservacion->nro_reservacion }}</p>
                </div>
                <div class="form-group">
                    <label for="nro_promocion">{{ __('Nro Promocion') }}</label>
                    <p>{{ $reservacion->nro_promocion }}</p>
                </div>
                <div class="form-group">
                    <label for="dni">{{ __('DNI') }}</label>
                    <p>{{ $reservacion->dni }}</p>
                </div>
                <div class="form-group">
                    <label for="pago_adelantado">{{ __('Pago Adelantado') }}</label>
                    <p>{{ $reservacion->pago_adelantado }}</p>
                </div>
                <div class="form-group">
                    <label for="updated_at">{{ __('Última Actualización') }}</label>
                    <p>{{ $reservacion->updated_at }}</p>
                </div>
                <a href="{{ route('reservacions.index') }}" class="btn btn-primary">{{ __('Volver a la Lista') }}</a>
            </div>
        </div>
    </div>
@endsection