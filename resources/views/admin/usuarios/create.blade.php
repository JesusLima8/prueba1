{{-- resources/views/admin/usuarios/create.blade.php --}}

@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="agregar">Crear Usuario</h1>
    <form method="POST" action="{{ route('usuarios.store') }}">
        @csrf
        <div class="form-group">
            <label class="form-label" for="name">Nombre:</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label class="form-label" for="email">Correo Electrónico:</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label class="form-label" for="password">Contraseña:</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <div class="form-group">
            <label class="form-label" for="role">Rol:</label>
            <select class="form-control" id="role" name="role">
                <option value="user">Usuario</option>
                <option value="admin">Administrador</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Guardar Usuario</button>
    </form>
</div>
@endsection
