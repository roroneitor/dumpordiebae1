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
     {{ method_field('PATCH') }}
     {{ csrf_field() }}
     <div class="box-body">
@include('projects._projectform')
     <div class="box-footer">
       <button type="submit" class="btn btn-primary">Actualizar</button>
     </div>

   </form>
 </div>
@endsection
