@extends('layouts.admin')

@section('main-content')
    <div class="container-fluid">
        <h1 class="h3 mb-4 text-gray-800">{{ __('Agregar Reservacion') }}</h1>

        <div class="card shadow mb-4">
            <div class="card-body">
                <form action="{{ route('reservacions.store') }}" method="POST">
                    @csrf
                    
                    <div class="form-group">
                        <label for="nro_reservacion">Nro Reservacion</label>
                        <input type="text" class="form-control" id="nro_reservacion" name="nro_reservacion" required>
                    </div>
                    <div class="form-group">
                        <label for="nro_promocion">Nro Promocion</label>
                        <input type="text" class="form-control" id="nro_promocion" name="nro_promocion" required>
                    </div>

                    

                    <div class="form-group">
                        <label for="dni">DNI</label>
                        <input type="text" class="form-control" id="dni" name="dni" required>
                    </div>
                    <div class="form-group">
                        <label for="pago_adelantado">Pago Adelantado</label>
                        <input type="text" class="form-control" id="pago_adelantado" name="pago_adelantado" required>
                    </div>

                    <button type="submit" class="btn btn-primary">{{ __('Agregar Reservacion') }}</button>

                </form>
            </div>
        </div>
    </div>
@endsection

