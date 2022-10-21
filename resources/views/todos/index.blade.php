@extends('layouts.app')

@section('content')
<div class="container">
    <div class="p-12 mt-4">
        <h1 class="fs-36 text-center">Lista de tareas</h1>
        <a href="/todos/create" class="btn btn-primary float-end mb-4">Nueva Tarea</a>
    </div>
    <div class="p-14 mt-4 w-fill">
        <table class="table table-striped table-hover">
            <thead class="table-primary">
                <th>#</th>
                <th>Tarea</th>
                <th>Descripcion</th>
                <th>Terminada</th>
                <th>Acciones</th>
            </thead>
            <tbody>
                @foreach($todos as $todo)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$todo->title}}</td>
                    <td>{{$todo->description}}</td>
                    <td>{{$todo->finished ? 'Sí' : 'No'}}</td>
                    <td>
                        <a href="{{$todo->id}}" class="btn btn-primary">Ver</a>
                        <a href="{{$todo->id}}/edit/" class="btn btn-info">Editar</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection