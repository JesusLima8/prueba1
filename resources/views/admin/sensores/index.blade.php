<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Sensores') }}
        </h2>
    </x-slot>

    <div>
        <!-- Aquí iría la tabla o lista de sensores -->
        <a href="{{ route('sensores.create') }}">Agregar Sensor</a>
    </div>
</x-app-layout>
