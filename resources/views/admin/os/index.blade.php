@extends('admin.templates.main')

@section('title', 'Lista de Obras Sociales')

@section('content')
<div class="container">
    <div class="row">
        <div class="col"></div>
        <div class="col-12">
<a href="{{ route('os.create') }}" class="btn btn-info">Registrar Nueva Obra Social</a><hr>
<table class="table table-striped">
    <thead>
        <th>ID</th>
        <th>Nombre de la Obra Social</th>
        <th>Accion</th>
    </thead>
    <tbody>
        @foreach($oss as $os)
        <tr>
            <td>{{ $os->id }}</td>
            <td>{{ $os->name }}</td>
            <td><a href="{{ route('os.edit', $os->id) }}" 
                   onclick="return confirm('Seguro que deseas editar la Obra Social?')"
                   class="btn btn-warning">Editar</a>
                <a href="{{ route('os.destroy', $os->id) }}" 
                   onclick="return confirm('Seguro que deseas eliminar la Obra Social?')"
                   class="btn btn-danger">Eliminar</a></td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
        <div class="col"></div>
</div>
</div>
@endsection
