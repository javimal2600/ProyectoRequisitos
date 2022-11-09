@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>formulario</h1>
@stop

@section('content')
    <form action="/clientes" method="POST">
        @csrf
        <div class="mb-3">
            <label for="" class="form-label">Nombre</label>
            <input type="text" id="nombre" name="nombre" class="form-control" required >
          </div>
          <div class="mb-3">
            <label for="2" class="form-label">Apellidos</label>
            <input type="text" id="apellido" name="apellido" class="form-control"  required>
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Telefono</label>
            <input type="number" id="telefono" name="telefono" class="form-control"  required>
          </div>
          <div class="mb-3">
            <label for="2" class="form-label">fecha de nacimiento</label>
            <input type="date" id="fechanac" name="fechanac" class="form-control"  required>
          </div>
          <div class="mb-3">
            <label for="" class="form-label">correo</label>
            <input type="email" id="correo" name="correo" class="form-control"  required>
          </div>
          <a href="/clientes" class="btn btn-secondary">Cancelar</a>
          <button type="submit" class="btn btn-primary" >Guardar</button>
    </form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')

@stop
