@extends('layouts.master')

@section('content')
  @include('layouts.errors')
  <div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">Editar datos del poyecto </h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form action="{{ route('ActualizarProyecto', $proyecto->id) }}" method="POST" role="form">
      {{ method_field('PUT') }}
      {{ csrf_field() }}
      <div class="box-body">
        <div class="row">
          <div class="col-md-4">
            @include('projects._projectform')
          </div>

          <div class="col-md-4">
            @include('projects._moduleform')
          </div>

          <div class="col-md-4">
            @include('projects._userform')
          </div>
        </div>
        <div class="box-footer">
          <button type="button" id="saveBtn" class="btn btn-primary">Actualizar</button>
        </div>

      </form>
    </div>
  @endsection

  @section('scripts')
    <script src="{{ asset('js/proyectos.js') }}"></script>
  @endsection
