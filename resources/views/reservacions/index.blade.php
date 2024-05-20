@extends('layouts.admin')

@section('main-content')
    <div class="container-fluid">
        <h1 class="h3 mb-4 text-gray-800">{{ __('Reservacions') }}</h1>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
@extends('layouts.admin')

@section('main-content')
    <div class="container-fluid">
        <h1 class="h3 mb-4 text-gray-800">{{ __('Lista de Reservacions') }}</h1>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <a href="{{ route('reservacions.create') }}" class="btn btn-primary mb-4">{{ __('Agregar Reservacion') }}</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nro Reservacion</th>
                    <th>Nro Promocion</th>
                    <th>DNI</th>
                    <th>Pago Adelantado</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($reservacions as $reservacion)
    <tr>
        <td>{{ $reservacion->nro_reservacion }}</td>
        <td>{{ $reservacion->nro_promocion }}</td>
        <td>{{ $reservacion->dni }}</td>
        <td>{{ $reservacion->pago_adelantado }}</td>
        <td>
            <a href="{{ route('reservacions.edit', $reservacion->nro_reservacion) }}" class="btn btn-warning">{{ __('Editar') }}</a>
            <form action="{{ route('reservacions.destroy', $reservacion->nro_reservacion) }}" method="POST" style="display:inline-block;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">{{ __('Eliminar') }}</button>
            </form>
        </td>
    </tr>
@endforeach
            </tbody>
        </table>
    </div>
@endsection


        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <a href="{{ route('reservacions.create') }}" class="btn btn-primary">{{ __('Agregar Reservacion') }}</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Nro Reservacion</th>
                            <th>Nro Promocion</th>
                            <th>DNI</th>
                            <th>Pago Adelantado</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($reservacions as $reservacion)
                            <tr>
                                <td>{{ $reservacion->nro_reservacion }}</td>
                                <td>{{ $reservacion->nro_promocion }}</td>
                                <td>{{ $reservacion->dni }}</td>
                                <td>{{ $reservacion->pago_adelantado }}</td>
                                <td>
                                    <a href="{{ route('reservacions.show', $reservacion) }}" class="btn btn-info btn-sm">{{ __('Ver') }}</a>
                                    <a href="{{ route('reservacions.edit', $reservacion) }}" class="btn btn-warning btn-sm">{{ __('Editar') }}</a>
                                    <form action="{{ route('reservacions.destroy', $reservacion) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">{{ __('Eliminar') }}</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
