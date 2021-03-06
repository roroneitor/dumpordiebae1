@extends('layouts.master')

@section('content')
@include('layouts.errors')
 <div class="box box-primary">
   <div class="box-header with-border">
     <h3 class="box-title">Editar datos del cliente</h3>
   </div>
   <!-- /.box-header -->
   <!-- form start -->
     <form action="{{ route('ActualizarCliente', $cliente->id) }}" method="POST" role="form">
     {{ method_field('PATCH') }}
     {{ csrf_field() }}
     <div class="box-body">
@include('clients._clientform')
     <div class="box-footer">
       <button type="submit" class="btn btn-primary">Actualizar</button>
       <a href="{{route('home')}}" type="button" class="btn btn-primary">Cancelar</a>
     </div>

   </form>
 </div>
@endsection
@section('scripts')
<script type="text/javascript">
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
