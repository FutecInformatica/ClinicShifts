@extends('admin.templates.main')

@section('title', 'Nuevo medico')

@section('content')
<div class="container">
    <div class="row">
        <div class="col"></div>
        <div class="col-12">
            <h1>Nuevo Medico</h1><hr>
            <br>
            <h2>Ingrese los datos para registrar el Nuevo Medico</h2>
        </div>
        <div class="col"></div>
    </div>
</div>
<div class="container">
    <div class="row">   
        <div class="col"></div>
        <div class="col-6">
    {!! Form::open(['route' => 'medicos.store', 'method' => 'POST']) !!}
    
    <div class="form-group">
        {!! Form::label('name', 'Nombre del Medico: ') !!}
        {!! Form::text('name', null, [
            'class' => 'form-control', 'placeholder' => 'Nombre', 'required'
            ]) !!}
    </div>
    <div class="form-group">
        {!! Form::label('id_especialidades', 'Especialidad: ') !!}
        {!! Form::select('esps[]', $esps, null,[
            'class' => 'form-control chosen-select','multiple', 'required'
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
@section('js')
    <script>$(".chosen-select").chosen({placeholder_text_multiple: 'Seleccione las opciones'});</script>
@endsection
