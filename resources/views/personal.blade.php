@extends('layouts/main')
@section('contenido')
    <h1 class="text-center">Personal</h1>
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-10">
                <table  class="table table-responsive table-hover table-bordered border-dark">
                    <thead class="table-dark">
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Apellido Paterno</th>
                            <th>Apellido Materno</th>
                            <th>Fecha Nacimiento</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($items as $item)
                            <tr>
                                <td>{{$item->id}}</td>
                                <td>{{$item->nombre}}</td>
                                <td>{{$item->paterno}}</td>
                                <td>{{$item->materno}}</td>
                                <td>{{$item->FechaNacimiento}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection