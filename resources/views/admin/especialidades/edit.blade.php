@extends('admin.templates.main')

@section('title', 'Editar Especialidad ' . $esp->name)

@section('content')

<div class="container">
    <div class="row">
        <div class="col"></div>
        <div class="col-12">
            <h2>Editar especialidad "{{ $esp->name }}</h2><hr>
            <br>
        </div>
        <div class="col"></div>
    </div>
</div>
<div class="container">
    <div class="row">   
        <div class="col"></div>
        <div class="col-6">
    {!! Form::open(['route' => ['especialidades.update', $esp->id], 'method' => 'PUT']) !!}
    
    <div class="form-group">
        {!! Form::label('name', 'Nombre de la especialidad: ') !!}
        {!! Form::text('name', $esp->name, [
            'class' => 'form-control', 'placeholder' => 'Nombre', 'required'
            ]) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Editar', ['class' => 'btn btn-warning']) !!}
    </div>
        
    
    {!! Form::close() !!}
    </div>
        <div class="col"></div>
    </div> 
</div>
@endsection
