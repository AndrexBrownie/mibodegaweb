@extends('layouts.template')

@section('title','Inicio')


@section('content')
<section class="content">
    <h1>suma de Números.</h1>
    <form action="<?= URL . '/home/suma'?>" method="POST">
        <div class="mb-3">
            <label for="number1" class="form-label">Número 1:</label>
            <input type="number" class="form-control" id="number1" name="number1" value="{{$num1}}">
        </div>
        <div class="mb-3">
            <label for="number2" class="form-label">Número 2:</label>
            <input type="number" class="form-control" id="number2" name="number2" value="{{$num2}}">
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Aceptar</button>
        </div>
    </form>
    <div class="mb-3">
        <label>La respuesta es:</label>
        <input type="text" class="form-control" id="rpta" readonly value="{{$rpta}}">
    </div>
</section>

@endsection