@extends('admin.templates.main')

@section('title', 'Lista de Usuarios')

@section('content')
<a href="{{ route('users.create') }}" class="btn btn-info">Registrar Nuevo Usuario</a><hr>
<table class="table table-striped">
    <thead>
        <th>ID</th>
        <th>username</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>E-Mail</th>
        <th>Tipo</th>
        <th>Ultimo Ingreso</th>
        <th>Accion</th>
    </thead>
    <tbody>
        @foreach($users as $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->username }}</td>
            <td>{{ $user->first_name }}</td>
            <td>{{ $user->last_name }}</td>
            <td>{{ $user->email }}</td>
            <td>
                @if($user->type == "admin")
                <span class="badge badge-pill badge-danger">Administrador</span>
                @else
                <span class="badge badge-pill badge-primary">Usuario</span>
                @endif
            </td>
            <td>{{ $user->updated_at }}</td>
            <td><a href="{{ route('users.edit', $user->id) }}" 
                   class="btn btn-warning">Editar</a>
                <a href="{{ route('users.destroy', $user->id) }}" 
                   onclick="return confirm('Seguro que deseas eliminar el Usuario?')"
                   class="btn btn-danger">Eliminar</a></td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection
