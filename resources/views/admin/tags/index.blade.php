@extends('adminlte::page')

@section('title', 'AAT')

@section('content_header')
    <h1>Mostrar listado de etiqueta</h1>
@stop

@section('content')

@if (session('info'))
    <div class="alert alert-success">
        <strong>{{session('info')}}</strong>
    </div>
@endif

<div class="card">
    <div class="card-header">
        <a class="btn btn-secondary btn-sm" href="{{route('admin.tags.create')}}">Agregar etiqueta</a>
    </div>

        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Color</th>
                        <th colspan="2"></th>
                    </tr>

                </thead>

                <tbody>
                    @foreach ($tags as $tag)
                    <tr>
                        <td>{{$tag->id}}</td>
                        <td>{{$tag->name}}</td>
                        <td>{{$tag->color}}</td>
                        <td width="10px">
                            <a class="btn btn-primary btn-sm" href="{{route('admin.tags.edit', $tag)}}">Editar</a>
                        </td>
                        <td width="10px">
                        <form action="{{route('admin.tags.destroy', $tag)}}" method="POST">
                            @csrf
                            @method('delete')

                            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                        </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop