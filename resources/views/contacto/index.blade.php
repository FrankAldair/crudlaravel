@extends('home')
@section('content')
<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8 py-4">
        <div class="row justify-content-md-between align-items-center">
            <div class="col-md-8">
            <h1>Lista de contactos</h1>
            </div>
            <div class="col-md-2">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary mx-3" data-bs-toggle="modal" data-bs-target="#create">
                Nuevo
                </button>
            </div>
        </div>
        <div class="table-responsive py-2">
            <table class="table table-success">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Telefóno</th>
                        <th>Dirección</th>
                        <th class="text-center">Acciones</th>             
                </thead>
                <tbody>
                @foreach ($contactos as $contacto)
                <tr>
                    <td>{{$contacto->id}}</td>
                    <td>{{$contacto->nombre}}</td>
                    <td>{{$contacto->telefono}}</td>
                    <td>{{$contacto->direccion}}</td>
                    <td class="d-flex justify-content-evenly">
                        <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#edit{{ $contacto->id }}">
                        Editar
                        </button>
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete{{ $contacto->id }}">
                        Eliminar
                        </button>
                        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#show{{ $contacto->id }}">
                            Mostrar
                        </button>
                </tr>
                @include('contacto.modal-info')
                @endforeach
                </tbody>
            </table>
        </div>
        @extends('contacto.modal-create')
    </div>
    <div class="col-md-2"></div>
</div>

@endsection
