@extends('adminlte::page')

@section('title', 'CRUD')

@section('content_header')
    <h1>Listado Psicologos</h1>
@stop

@section('content')
<a href="psicologos/create" class="btn btn-primary mb-3">CREAR</a>
<table id="psicologos" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
<thead class="bg-primary text-white">
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Nombre</th>
        <th scope="col">Apellidos</th>
        <th scope="col">Telefono</th>
        <th scope="col">Fecha de nacimiento</th>
        <th scope="col">Correo</th>
        <th scope="col">Cedula</th>
        <th scope="col">Acciones</th>
    </tr>
</thead>
<tbody>
    @foreach ( $psicologos as $psicologo )
    <tr>
        <td>{{$psicologo->id}}</td>
        <td>{{$psicologo->nombre}}</td>
        <td>{{$psicologo->apellido}}</td>
        <td>{{$psicologo->telefono}}</td>
        <td>{{$psicologo->fechanac}}</td>
        <td>{{$psicologo->correo}}</td>
        <td>{{$psicologo->cedula}}</td>
        <td>
            <form action="{{route('psicologos.destroy',$psicologo->id)}}" method="POST">
                <a href="/psicologos/{{$psicologo->id}}/edit" class="btn btn-info">Editar</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Borrar</button>
            </form>
        </td>
    </tr>
    @endforeach
</tbody>
</table>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css" rel="stylesheet">
@stop

@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
<script>
    $(document).ready(function () {
    $('#psicologos').DataTable({
        "lengthMenu": [[5,10,50, -1],[5,10,50,"ALL"]]
    });
});
</script>
@stop
