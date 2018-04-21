<?php $__env->startSection('content'); ?>
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
      <?php $__currentLoopData = $proyectos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $proyecto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <tr>
              <td><?php echo e($proyecto->title); ?></td>
              <td><?php echo e($proyecto->date_init); ?></td>
              <td><?php echo e($proyecto->date_end); ?></td>
              <td><?php echo e($proyecto->description); ?></td>
              <td>

                <form action="<?php echo e(route('EliminarProyecto', $proyecto->id)); ?>" method="POST">
                    <?php echo e(method_field('DELETE')); ?>

                    <?php echo e(csrf_field()); ?>

                    <a href="" class="btn btn-xs btn-success">ver</a>
                    <a href="<?php echo e(route('EditarProyecto', $proyecto->id)); ?>" class="btn btn-xs btn-primary">Editar</a>
                    <button type="button" class="btn-delete btn-danger btn btn-xs">Eliminar</button>
                    <button type="button" class="btn- btn btn-xs">Agregar tarea</button>
                </form>
              </td>
          </tr>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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

<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
<script>
    $('.btn-delete').on('click', function(e) {
        if(confirm('¿Está seguro de borrar este proyecto?')) {
            $(this).parents('form:first').submit();
        }
    });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>