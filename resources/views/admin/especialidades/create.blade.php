@extends('admin.templates.main')

@section('title', 'Nueva Especialidad')

@section('content')
<div class="container">
    <div class="row">
        <div class="col"></div>
        <div class="col-12">
            <h1>Nueva Especialidad</h1><hr>
            <br>
            <h2>Ingrese los datos para registrar la Nueva Especialidad</h2>
        </div>
        <div class="col"></div>
    </div>
</div>
<div class="container">
    <div class="row">   
        <div class="col"></div>
        <div class="col-6">
    {!! Form::open(['route' => 'especialidades.store', 'method' => 'POST']) !!}
    
    <div class="form-group">
        {!! Form::label('name', 'Nombre de la Especialidad: ') !!}
        {!! Form::text('name', null, [
            'class' => 'form-control', 'placeholder' => 'Nombre', 'required'
            ]) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Registrar', ['class' => 'btn btn-primary']) !!}
    </div>
        
    
    {!! Form::close() !!}
    </div>
        <div class="col"></div>
    </div> 
</div>
@endsection
