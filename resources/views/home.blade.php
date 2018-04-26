@extends('layouts.master')
@section('content')
  <div class="panel panel-default">
    <div class="panel-heading">
    <h3><b>  <i class="fa fa-database"></i> Proyectos</b></h3>
    </div>
    <div class="panel-body"><h4>
      {{$numerodeproyectos}} proyectos creados
</h4>
    </div>
    <div class="panel-footer">
      <a href="{{ route('CrearProyecto') }}" class="btn btn-success "type="button"><b>+</b> Proyectos</a>
      <a href="{{ route('MostrarProyectos') }}" class="btn btn-primary "type="button">Ver proyectos</a>
    </div>
</div>

<div class="row">
  <div class="col-md-4">
    <div class="panel panel-default">
      <div class="panel-heading">
      <h3><b><i class="fa fa-tasks"></i></i> Tareas</b></h3>
      </div>
      <div class="panel-body"><h4>
        {{$numerodeproyectos}} tareas en curso
      </h4>
      </div>
      <div class="panel-footer">
        <a href="#" class="btn btn-success "type="button"><b>+</b> Tareas</a>
        <a href="#" class="btn btn-primary "type="button">Ver Tareas</a>
      </div>
    </div>
  </div>

  <div class="col-md-4">
    <div class="panel panel-default">
      <div class="panel-heading">
      <h3><b>  <i class="fa fa-user"></i></i> Usuarios</b></h3>
      </div>
      <div class="panel-body">
        <h4>
        {{$numerodeusuarios}} usuarios activos
        </h4>
      </div>
    </div>
  </div>

  <div class="col-md-4">
    <div class="panel panel-default">
      <div class="panel-heading">
      <h3><b> <i class="fa fa-users"></i> Clientes</b></h3>
      </div>
      <div class="panel-body">
        <h4>
        {{$numerodeclientes}} clientes
        </h4>
      </div>
      <div class="panel-footer">
        <a href="{{ route('CrearCliente') }}" class="btn btn-success "type="button"><b>+</b> Cliente</a>
        <a href="{{ route('MostrarClientes') }}" class="btn btn-primary "type="button">Ver clientes</a>
      </div>
    </div>
  </div>
</div>
@endsection
