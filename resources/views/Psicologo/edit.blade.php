@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Editar</h1>
@stop

@section('content')
    <p>Welcome to this beautiful admin panel.</p>
    <form action="/psicologos/{{$psicologo->id}}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="" class="form-label">Nombre</label>
            <input type="text" id="nombre" name="nombre" class="form-control" value="{{$psicologo->nombre}}" >
          </div>
          <div class="mb-3">
            <label for="2" class="form-label">Apellidos</label>
            <input type="text" id="apellido" name="apellido" class="form-control" value="{{$psicologo->apellido}}">
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Telefono</label>
            <input type="number" id="telefono" name="telefono" class="form-control" value="{{$psicologo->telefono}}">
          </div>
          <div class="mb-3">
            <label for="2" class="form-label">fecha de nacimiento</label>
            <input type="date" id="fechanac" name="fechanac" class="form-control" value="{{$psicologo->fechanac}}">
          </div>
          <div class="mb-3">
            <label for="" class="form-label">correo</label>
            <input type="email" id="correo" name="correo" class="form-control" value="{{$psicologo->correo}}">
          </div>
          <div class="mb-3">
            <label for="2" class="form-label">Cedula</label>
            <input type="number" id="cedula" name="cedula" class="form-control" value="{{$psicologo->cedula}}">
          </div>
          <a href="/psicologos" class="btn btn-secondary">Cancelar</a>
          <button type="submit" class="btn btn-primary" >Guardar</button>
    </form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')

@stop
