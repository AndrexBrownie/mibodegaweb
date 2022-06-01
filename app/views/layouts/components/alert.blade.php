<div class="alert alert-{{ $color }}">

    <div class="alert-title">{{ $title }}</div>

    {{---Insertar Contenido --$slot-- variable reservada--}}
    {{ $slot }}
</div>