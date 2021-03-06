@extends('admin.templates.main')

@section('title', 'Nuevo Usuario')

@section('content')
<div class="container">
    <div class="row">
        <div class="col"></div>
        <div class="col-12">
            <h1>Nuevo Usuario</h1><hr>
            <br>
            <h2>Ingrese los datos para registrar el Nuevo Usuario</h2>
        </div>
        <div class="col"></div>
    </div>
</div>
<div class="container">
    <div class="row">   
        <div class="col"></div>
        <div class="col-6">
    {!! Form::open(['route' => 'users.store', 'method' => 'POST']) !!}
    
    <div class="form-group">
        {!! Form::label('username', 'Usuario: ') !!}
        {!! Form::text('username', null, [
            'class' => 'form-control', 'placeholder' => 'Usuario', 'required'
            ]) !!}
    </div>
    <div class="form-group">
        {!! Form::label('password', 'Password: ') !!}
        {!! Form::password('password', [
            'class' => 'form-control', 'placeholder' => '********', 'required'
            ]) !!}
    </div>
    <div class="form-group">
        {!! Form::label('first_name', 'Nombre: ') !!}
        {!! Form::text('first_name', null, [
            'class' => 'form-control', 'placeholder' => 'Nombre', 'required'
            ]) !!}
    </div>
    <div class="form-group">
        {!! Form::label('last_name', 'Apellido: ') !!}
        {!! Form::text('last_name', null, [
            'class' => 'form-control', 'placeholder' => 'Apellido', 'required'
            ]) !!}
    </div>
    <div class="form-group">
        {!! Form::label('email', 'E-Mail: ') !!}
        {!! Form::email('email', null, [
            'class' => 'form-control', 'placeholder' => 'example@domain.com', 'required'
            ]) !!}
    </div>
    <div class="form-group">
        {!! Form::label('type', 'Tipo: ') !!}
        {!! Form::select('type', [
            '' => 'Seleccione tipo de usuario', 'member' => 'Miembro', 'admin' => 'Administrador'
            ], null, [
            'class' => 'form-control'
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
