@extends('layouts.master')
@section('content')
<!-- general form elements -->
<div class="box box-primary">
  <div class="box-header with-border">
    <h3 class="box-title">Asignar roles de usuario</h3>
  </div>
  <!-- /.box-header -->
  <!-- form start -->
  <form method="POST" action="{{ route('GuardarRol')}}">
    {{ method_field('PATCH') }}
    {{ csrf_field() }}
    <div class="box-body">
      <div class="form-group">
      <label>Usuario</label>
      <select type="text" class="form-control select2" id="user_id" name="user_id">
@foreach ($Usuarios as $Usuario)
      <option value="{{$Usuario->id}}">{{$Usuario->name}}</option>
@endforeach
      </select>
      </div>
      <div class="form-group">
      <label>Rol</label>
      <select type="text" class="form-control select2" id="role_id" name="role_id">
        @foreach ($Roles as $rol)
              <option value="{{$rol->id}}">{{$rol->name}}</option>
        @endforeach
      </select>
      </div>
      <div class="box-footer">
        <button type="submit" class="btn btn-primary">Asignar</button>
        <a href="{{route('home')}}" type="button" class="btn btn-primary">Cancelar</a>
      </div>

    </form>
  </div>
@include('layouts.errors')
@endsection
