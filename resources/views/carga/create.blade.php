@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
<h1>Vista de la carga de archivos</h1>

<form action="/cargas" method="POST" enctype="multipart/form-data">
  @csrf
  
 <div class="col-md-4">
   <label for="" class="form-label">Usuario</label>
   <input type="text" name="Usuario" class="form-control" required>
 </div>
 <div class="col-md-4">
   <label for="" class="form-label">Archivo</label>
   <input type="file" name="Nom_archi" class="form-control" accept=".DVN, .xls, .xlsx" required>
 </div> 
   <div class="col-md-4">
     <label for="" class="form-label">Fecha de cargue</label>  
     <input class="form-control" type="date" name="Fecha_cargue">
    </div>
 <div class="col-md-3">
   <label for="" class="form-label">Observaciones</label>
   <div class="md-form">
      <input name="Observaciones" rows="10" cols="50">
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