@extends('layouts.master')

@section('content')
<div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Listado de Proyectos</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
    <table id="tabla1" class="table table-bordered table-striped">
      <thead>
          <tr>
              <th>Titulo</th>
              <th>Fecha Inicial</th>
              <th>Fecha Final</th>
              <th>descripción</th>
              <th>Acción</th>
          </tr>
      </thead>
      <tbody>
      @foreach ($proyectos as $proyecto)
          <tr>
              <td>{{ $proyecto->title}}</td>
              <td>{{ $proyecto->date_init}}</td>
              <td>{{ $proyecto->date_end}}</td>
              <td>{{ $proyecto->description}}</td>
              <td>

                <form action="{{ route('EliminarProyecto', $proyecto->id) }}" method="POST">
                    {{ method_field('DELETE') }}
                    {{ csrf_field() }}
                    <a href="" class="btn btn-xs btn-success">ver</a>
                    <a href="{{ route('EditarProyecto', $proyecto->id) }}" class="btn btn-xs btn-primary">Editar</a>
                    <button type="button" class="btn-delete btn-danger btn btn-xs">Eliminar</button>
                    <button type="button" class="btn- btn btn-xs">Agregar tarea</button>
                </form>
              </td>
          </tr>
      @endforeach
      </tbody>
      <tfoot>
      <tr>
        <th>Titulo</th>
        <th>Fecha Inicial</th>
        <th>Fecha Final</th>
        <th>descripción</th>
        <th>Acción</th>
      </tr>
      </tfoot>
    </table>
  </div>
</div>
</div>
</div>

@endsection
@section('scripts')
<script>
    $('.btn-delete').on('click', function(e) {
        if(confirm('¿Está seguro de borrar este proyecto?')) {
            $(this).parents('form:first').submit();
        }
    });
</script>
@endsection
