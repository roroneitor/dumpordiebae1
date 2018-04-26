<?php $__env->startSection('content'); ?>
  <?php echo $__env->make('layouts.errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <div class="box box-primary">
    <div class="box-header with-border">
      <h3 class="box-title">Editar datos del poyecto </h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form action="<?php echo e(route('ActualizarProyecto', $proyecto->id)); ?>" method="POST" role="form">
      <?php echo e(method_field('PUT')); ?>

      <?php echo e(csrf_field()); ?>

      <div class="box-body">
        <div class="row">
          <div class="col-md-6">
            <?php echo $__env->make('projects._projectform', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
          </div>

          <div class="col-md-6">
            <?php echo $__env->make('projects._moduleform', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
          </div>
        </div>
        <div class="box-footer">
          <button type="button" id="saveBtn" class="btn btn-primary">Actualizar</button>
        </div>

      </form>
    </div>
  <?php $__env->stopSection(); ?>

  <?php $__env->startSection('scripts'); ?>
    <script src="<?php echo e(asset('js/proyectos.js')); ?>"></script>
  <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>