@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
<h1>Vista del index de carga</h1>  
<a href="cargas/create" class="btn btn-primary mb-3"> Creaar </a>

<table id="cargas" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
  <thead class="bg-primary text-white">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Usuario</th> 
      <th scope="col">Nombre Archivo</th>
      <th scope="col">Fecha cargue</th>
      <th scope="col">Observaciones</th>
      <th scope="col">Ingresado</th>
      <th scope="col">MOdificado</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($cargas as $carga)
    <tr>
      <th scope="row">1</th>
      <td>{{$carga->Usuario}}</td>
      <td>{{$carga->Nom_archi}}</td>
      <td>{{$carga->Fecha_cargue}}</td>
      <td>{{$carga->Observaciones}}</td>
      <td>{{$carga->created_at}}</td>
      <td>{{$carga->updated_at}}</td>
      <td>
          <form action="{{route ('cargas.destroy', $carga->id)}}" method="post">
              @csrf
              @method('DELETE')
              <a href="/cargas/{{$carga->id}}/edit" class="btn btn-info"> Editar </a>
              <button type="submit" class="btn btn-danger"> Borrear </button>
          </form>    
      </td>
    </tr>
    @endforeach
   
  </tbody>
</table>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css" rel="stylesheet">

@stop

@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script> 
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script> 
<script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script> 
<script>
    $(document).ready(function() {
      $('#cargas').DataTable({
          "lengthMenu":[[5,10,50,-1], [5,10,50,"All"]]
      });
      } );
</script>
@stop