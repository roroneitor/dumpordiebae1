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
                <th width="30%">Titulo</th>
                <th width="8%">Fecha Inicial</th>
                <th width="8%">Fecha Final</th>
                <th width="30%">Descripción</th>
                <th width="9%">Acción</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($proyectos as $proyecto)
                <tr>
                  <td>{{ $proyecto->title}}</td>
                  <td>{{ $proyecto->date_init}}</td>
                  <td>{{ $proyecto->date_end ?? 'No definido'}}</td>
                  <td>{{ $proyecto->description}}</td>
                  <td>
                    <form action="{{ route('EliminarProyecto', $proyecto->id) }}" method="POST">
                      <button type="button" name="button" class="btn btn-xs btn-default addTask" data-title="{{$proyecto->title}}" data-id="{{ $proyecto->id }}">
                        <i class="glyphicon glyphicon-tasks"></i>
                      </button>
                      <a href="{{ route('VerProyecto', $proyecto) }}" class="btn btn-xs btn-success">
                        <i class="glyphicon glyphicon-eye-open"></i>
                      </a>
                      <a href="{{ route('EditarProyecto', $proyecto->id) }}" class="btn btn-xs btn-primary">
                        <i class="glyphicon glyphicon-pencil"></i>
                      </a>
                      {{ method_field('DELETE') }}
                      {{ csrf_field() }}
                      <button type="button" class="btn-delete btn-danger btn btn-xs">
                        <i class="glyphicon glyphicon-trash"></i>
                      </button>
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

  <div class="modal fade" id="modalTask" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Tareas</h4>
        </div>
        <div class="modal-body">
          <form class="" action="" method="post">
            @include('tasks.addtaskform')
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          <button type="button" class="btn btn-primary">Guardar</button>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('scripts')
  <script>

  $(document).ready(function(){
    $('.btn-delete').on('click', function(e) {
      if(confirm('¿Está seguro de borrar este proyecto?')) {
        $(this).parents('form:first').submit();
      }
    });

    $(document).on('click', '.addTask',  function(e){
      e.preventDefault();
      console.log($(this).attr('data-id'));

      $('#modalTask').modal();
    });
  });
  </script>
@endsection
