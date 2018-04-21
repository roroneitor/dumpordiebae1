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
    <?php echo $__env->make('_clientform', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
          <div class="box-footer">
            <button type="submit" class="btn btn-primary">Agregar</button>
          </div>

        </form>
      </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>