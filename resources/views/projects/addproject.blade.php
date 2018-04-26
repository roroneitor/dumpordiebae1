@extends('layouts.master')

@section('content')
@include('layouts.errors')
<!-- general form elements -->
<div class="box box-primary">
  <div class="box-header with-border">
    <h3 class="box-title">Crear proyecto</h3>
  </div>
  <!-- /.box-header -->
  <!-- form start -->
  <form method="POST" action="{{route('GuardarProyecto')}}">
    @csrf
    {{ method_field('POST') }}
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
        <button type="button" id="saveBtn" class="btn btn-primary">Crear proyecto</button>
      </div>

    </form>
  </div>
  @endsection

  @section('scripts')
  <script src="{{ asset('js/proyectos.js') }}"></script>
  @endsection
