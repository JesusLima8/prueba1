<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Usuarios') }}
        </h2>
    </x-slot>

    <div>
        <!-- Aquí iría la tabla o lista de usuarios -->
        <a href="{{ route('usuarios.create') }}">Crear Usuario</a>
    </div>
</x-app-layout>
