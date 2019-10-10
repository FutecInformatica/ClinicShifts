@extends('admin.templates.main')

@section('title', 'Lista de Especialidades')

@section('content')
<div class="container">
    <div class="row">
        <div class="col"></div>
        <div class="col-12">
<a href="{{ route('especialidades.create') }}" class="btn btn-info">Registrar Nueva Especialidad</a><hr>
<table class="table table-striped">
    <thead>
        <th>ID</th>
        <th>Nombre de la Especialidad</th>
        <th>Accion</th>
    </thead>
    <tbody>
        @foreach($esps as $esp)
        <tr>
            <td>{{ $esp->id }}</td>
            <td>{{ $esp->name }}</td>
            <td><a href="{{ route('especialidades.edit', $esp->id) }}" 
                   onclick="return confirm('Seguro que deseas editar la Especialidad?')"
                   class="btn btn-success"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
                <a href="{{ route('especialidades.destroy', $esp->id) }}" 
                   onclick="return confirm('Seguro que deseas eliminar la Especialidad?')"
                   class="btn btn-danger"><span class="glyphicon glyphicon-ban-circle" aria-hidden="true"></span></a></td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
        <div class="col"></div>
</div>
{!! $esps->render() !!}
</div>
@endsection
