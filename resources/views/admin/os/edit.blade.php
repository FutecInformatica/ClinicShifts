@extends('admin.templates.main')

@section('title', 'Editar Obra Social ' . $os->name)

@section('content')

<div class="container">
    <div class="row">
        <div class="col"></div>
        <div class="col-12">
            <h2>Editar obra social "{{ $os->name }}</h2><hr>
            <br>
        </div>
        <div class="col"></div>
    </div>
</div>
<div class="container">
    <div class="row">   
        <div class="col"></div>
        <div class="col-6">
    {!! Form::open(['route' => ['os.update', $os->id], 'method' => 'PUT']) !!}
    
    <div class="form-group">
        {!! Form::label('name', 'Nombre de la obra social: ') !!}
        {!! Form::text('name', $os->name, [
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
