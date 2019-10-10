@extends('admin.templates.main')

@section('title', 'Listado de Medicos')

@section('content')
<div class="container">
    <div class="row">
        <div class="col"></div>
        <div class="col-12">
<a href="{{ route('medicos.create') }}" class="btn btn-info">Registrar Nuevo Medico</a><hr>
<!-- Buscador -->
{!! Form::open(['route' => 'medicos.index', 'method' => 'GET',
    'class' => 'navbar-form pull-right']) !!}
    <div class="input-group">
        {!! Form::text('name', null, ['class' => 'form-control', 
        'placeholder' => 'Buscar medico...', 'aria-describedby' => 'search']) !!}
        <span class='input-group-addon' id='search'>
            <span class='glyphicon glyphicon-search', aria-hidden='true'></span>
        </span>
        </div>
    <hr>
    {!! Form::close() !!}
<table class="table table-striped">
    <thead>
        <th>ID</th>
        <th>Nombre del Medico</th>
        <th>Especialidad</th>
        <th>Accion</th>
    </thead>
    <tbody>
        @foreach($medicos as $medico)
        <tr>
            <td>{{ $medico->id }}</td>
            <td>{{ $medico->name }}</td>
            <td>@foreach($medico->especialidades as $esp)
                {{ $esp->name }}</br>
            @endforeach</td>
            <td><a href="#" 
                   onclick="return confirm('Seguro que deseas editar la Especialidad?')"
                   class="btn btn-success"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
                <a href="#" 
                   onclick="return confirm('Seguro que deseas eliminar la Especialidad?')"
                   class="btn btn-danger"><span class="glyphicon glyphicon-ban-circle" aria-hidden="true"></span></a></td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
        <div class="col"></div>
</div>
{!! $medicos->render() !!}
</div>
@endsection
