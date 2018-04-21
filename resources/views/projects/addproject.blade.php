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
          <div class="box-body">
    @include('projects._projectform')
          <div class="box-footer">
            <button type="submit" class="btn btn-primary">Crear proyecto</button>
          </div>

        </form>
      </div>
@endsection
