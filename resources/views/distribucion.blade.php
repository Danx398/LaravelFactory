@extends('layouts/main')
@section('contenido')
    <h1 class="text-center">Distribuciones</h1>
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-10">
                <table  class="table table-responsive table-hover table-bordered border-dark">
                    <thead class="table-dark">
                        <tr>
                            <td>ID</td>
                            <td>Calle</td>
                            <td>Ubicacion</td>
                            <td>numero</td>
                            <td>Delegación</td>
                            <td>Pais</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($items as $item)
                            <tr>
                                <td>{{$item->id}}</td>
                                <td>{{$item->Calle}}</td>
                                <td>{{$item->Ubicacion}}</td>
                                <td>{{$item->numero}}</td>
                                <td>{{$item->delegacion}}</td>
                                <td>{{$item->pais}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection