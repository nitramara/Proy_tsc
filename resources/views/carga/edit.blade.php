@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
<h1>Vista de EDITAR archivos</h1>

<form action="/cargas/{{$carga->id}}" method="POST">
  @csrf
  @method('PUT')
 <div class="col-md-4">
   <label for="" class="form-label">Usuario</label>
   <input type="text" name="Usuario" class="form-control" value="{{$carga->Usuario}}">
 </div>
 <div class="col-md-4">
   <label for="" class="form-label">Nombre de archivo</label>
   <input type="text" name="Nom_archi" class="form-control" value="{{$carga->Nom_archi}}">
 </div>
   <div class="col-md-4">
     <label for="" class="form-label">Fecha de cargue</label>  
     <input class="form-control" type="date" name="Fecha_cargue" value="{{$carga->Fecha_cargue}}">
    </div>
 <div class="col-md-3">
   <label for="" class="form-label">Observaciones</label>
   <div class="md-form">
      <input name="Observaciones" rows="10" cols="50" value="{{$carga->Observaciones}}">
    </div>
  </div>
 <div class="col-12">
   <div class="form-check">
     <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
     <label class="form-check-label" for="invalidCheck">
       Agree to terms and conditions
     </label>
     <div class="invalid-feedback">
       You must agree before submitting.
     </div>
   </div>
 </div>
 <div class="col-12">
     <a href="/cargas" class="btn btn-secundary" tabindex="5">Cancelar</a>
   <button class="btn btn-primary" type="submit">Guardar</button>
 </div>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
@stop