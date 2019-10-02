@extends('admin.templates.main')

@section('title', 'Editar Usuario ' . $user->username)

@section('content')

<div class="container">
    <div class="row">
        <div class="col"></div>
        <div class="col-12">
            <h2>Editar Usuario "{{ $user->first_name }} {{ $user->last_name }}"</h2><hr>
            <br>
        </div>
        <div class="col"></div>
    </div>
</div>
<div class="container">
    <div class="row">   
        <div class="col"></div>
        <div class="col-6">
    {!! Form::open(['route' => ['users.update', $user->id], 'method' => 'PUT']) !!}
    
    <div class="form-group">
        {!! Form::label('username', 'Usuario: ') !!}
        {!! Form::text('username', $user->username, [
            'class' => 'form-control', 'placeholder' => 'Usuario', 'required'
            ]) !!}
    </div>
    <div class="form-group">
        {!! Form::label('first_name', 'Nombre: ') !!}
        {!! Form::text('first_name', $user->first_name, [
            'class' => 'form-control', 'placeholder' => 'Nombre', 'required'
            ]) !!}
    </div>
    <div class="form-group">
        {!! Form::label('last_name', 'Apellido: ') !!}
        {!! Form::text('last_name', $user->last_name, [
            'class' => 'form-control', 'placeholder' => 'Apellido', 'required'
            ]) !!}
    </div>
    <div class="form-group">
        {!! Form::label('email', 'E-Mail: ') !!}
        {!! Form::email('email', $user->email, [
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
        {!! Form::submit('Editar', ['class' => 'btn btn-warning']) !!}
    </div>
        
    
    {!! Form::close() !!}
    </div>
        <div class="col"></div>
    </div> 
</div>
@endsection
