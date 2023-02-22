@extends('layouts/main')
@section('contenido')
    <h1 class="text-center">Productos</h1>
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-8">
                <table class="table table-responsive table-hover table-bordered border-dark">
                    <thead class="table-dark">
                        <tr>
                            <th>ID</th>
                            <th>Productos</th>
                            <th>Lote</th>
                            <th>Caducidad</th>
                            <th>Imagen</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($items as $item)
                            <tr>
                                <td>{{$item->id}}</td>
                                <td>{{$item->productos}}</td>
                                <td>{{$item->lote}}</td>
                                <td>{{$item->caducidad}}</td>
                                <td><img src="{{ asset('img/'.$item->imagen) }}" style="width: 50px" alt=""></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            
        </div>
    </div>
@endsection