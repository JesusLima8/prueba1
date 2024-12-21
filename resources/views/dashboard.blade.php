{{-- resources/views/dashboard.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="container">
    <!--<h1>Dashboard</h1>-->
    @if(auth()->user()->role === 'admin')
        <div class="admin-controls" style="color: white;">
            <h2 style="cursor: pointer;" onclick="toggleAdminOptions()">Opciones de Administrador</h2>
            <ul id="admin-options" style="display: none; list-style-type: none; padding: 0;">
                <li><a href="{{ route('usuarios.create') }}" style="color: black;">Crear Usuario</a></li>
                <li><a href="{{ route('sensores.create') }}" style="color: black;">Agregar Sensor</a></li>
            </ul>
        </div>
    @endif
    <!-- Otras partes de la vista del dashboard -->
</div>

<script>
    function toggleAdminOptions() {
        var x = document.getElementById("admin-options");
        if (x.style.display === "none") {
            x.style.display = "block";
        } else {
            x.style.display = "none";
        }
    }
</script>
@endsection
