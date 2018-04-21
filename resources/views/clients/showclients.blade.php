@extends('layouts.master')

@section('content')
<div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Clientes de Softronix Company</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
    <table id="tabla1" class="table table-bordered table-striped">
      <thead>
          <tr>
              <th>Nombre</th>
              <th>RIF/ID</th>
              <th>Correo</th>
              <th>Telefono</th>
              <th>País</th>
              <th>Estado</th>
              <th>Acción</th>
          </tr>
      </thead>
      <tbody>



      @foreach ($clientes as $cliente)

          <tr>
              <td>{{ $cliente->business_name}}</td>
              <td>{{ $cliente->id_number}}</td>
              <td>{{ $cliente->email}}</td>
              <td>{{ $cliente->phone}}</td>
              <td>{{$cliente->country_id}}</td>
              <td>{{$cliente->state_id}}</td>
              <td>

                <form action="{{ route('EliminarCliente', $cliente->id) }}" method="POST">
                    {{ method_field('DELETE') }}
                    {{ csrf_field() }}
                    <a href="" class="btn btn-xs btn-success">ver</a>
                    <a href="{{ route('EditarCliente', $cliente->id) }}" class="btn btn-xs btn-primary">Editar</a>
                    <button type="button" class="btn-delete btn-danger btn btn-xs">Eliminar</button>
                </form>
              </td>

          </tr>
      @endforeach

      </tbody>

      <tfoot>
      <tr>
        <th>Nombre</th>
        <th>Cédula/RIF</th>
        <th>Correo</th>
        <th>Telefono</th>
        <th>País</th>
        <th>Estado</th>
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
<script type="text/javascript">
    $('.btn-delete').on('click', function(e) {
        if(confirm('¿Está seguro de borrar este cliente?')) {
            $(this).parents('form:first').submit();
        }
    });
    $(document).ready(function(){
      $("#country_id").change(function(event){

        var country_id =$(this).val();
        var rutaPais = $('#_rutaEstado').val();

        var request = $.ajax({
          url: rutaPais,
          method: "POST",
          data: { country_id : country_id, _token: $('input[name="_token"]').val() },
          dataType: "json"
        }).done(function(response){
          $('#state_id option').remove();

          $.each(response, function (index, value) {
            $('#state_id').append('<option value="'+value.id+'">'+value.name+'</option>');
          });
        });
      });
    });
</script>
@endsection
