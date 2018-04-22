<?php $__env->startSection('content'); ?>
<?php echo $__env->make('layouts.errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      <!-- general form elements -->
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Agregar cliente</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form method="POST" action="<?php echo e(route('GuardarCliente')); ?>">
          <?php echo csrf_field(); ?>
          <div class="box-body">
    <?php echo $__env->make('clients._clientform', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
          <div class="box-footer">
            <button type="submit" class="btn btn-primary">Agregar</button>
            <a href="<?php echo e(route('home')); ?>" type="button" class="btn btn-primary">Cancelar</a>
          </div>

        </form>
      </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>