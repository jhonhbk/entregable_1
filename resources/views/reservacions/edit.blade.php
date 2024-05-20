@extends('layouts.admin')

@section('main-content')
    <div class="container-fluid">
        <h1 class="h3 mb-4 text-gray-800">{{ __('Editar Reservacion') }}</h1>

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
                <form action="{{ route('reservacions.update', $reservacion) }}" method="POST">
                    @csrf
                    @method('PUT')
                    
                    <div class="form-group">
                        <label for="nro_reservacion">{{ __('Nro Reservacion') }}</label>
                        <input type="text" class="form-control" id="nro_reservacion" name="nro_reservacion" value="{{ old('nro_reservacion', $reservacion->nro_reservacion) }}" required>
                    </div>
                    <div class="form-group">
                        <label for="nro_promocion">{{ __('Nro Promocion') }}</label>
                        <input type="text" class="form-control" id="nro_promocion" name="nro_promocion" value="{{ old('nro_promocion', $reservacion->nro_promocion) }}" required>
                    </div>
                    <div class="form-group">
                        <label for="dni">{{ __('DNI') }}</label>
                        <input type="text" class="form-control" id="dni" name="dni" value="{{ old('dni', $reservacion->dni) }}" required>
                    </div>
                    <div class="form-group">
                        <label for="pago_adelantado">{{ __('Pago Adelantado') }}</label>
                        <input type="text" class="form-control" id="pago_adelantado" name="pago_adelantado" value="{{ old('pago_adelantado', $reservacion->pago_adelantado) }}" required>
                    </div>
                    <button type="submit" class="btn btn-primary">{{ __('Actualizar') }}</button>
                </form>
            </div>
        </div>
    </div>
@endsection