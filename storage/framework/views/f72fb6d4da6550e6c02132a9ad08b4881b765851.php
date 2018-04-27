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
                <th width="25%">Titulo</th>
                <th width="10%">Fecha Inicial</th>
                <th width="9%">Fecha Final</th>
                <th width="33%">Descripción</th>
                <th width="10%">Acción</th>
              </tr>
            </thead>
            <tbody>
              <?php $__currentLoopData = $proyectos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $proyecto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                  <td><?php echo e($proyecto->title); ?></td>
                  <td><?php echo e($proyecto->date_init); ?></td>
                  <td><?php echo e($proyecto->date_end ?? 'No definido'); ?></td>
                  <td><?php echo e($proyecto->description); ?></td>
                  <td>
                    <form action="<?php echo e(route('EliminarProyecto', $proyecto->id)); ?>" method="POST">
                      <button type="button" name="button" class="btn btn-xs btn-default addTask" data-title="<?php echo e($proyecto->title); ?>" data-id="<?php echo e($proyecto->id); ?>">
                        <i class="glyphicon glyphicon-tasks"></i>
                      </button>
                      <a href="<?php echo e(route('VerProyecto', $proyecto)); ?>" class="btn btn-xs btn-success">
                        <i class="glyphicon glyphicon-eye-open"></i>
                      </a>
                      <a href="<?php echo e(route('EditarProyecto', $proyecto->id)); ?>" class="btn btn-xs btn-primary">
                        <i class="glyphicon glyphicon-pencil"></i>
                      </a>
                      <?php echo e(method_field('DELETE')); ?>

                      <?php echo e(csrf_field()); ?>

                      <button type="button" class="btn-delete btn-danger btn btn-xs">
                        <i class="glyphicon glyphicon-trash"></i>
                      </button>
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

  <div class="modal fade" id="modalTask" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Tareas</h4>
        </div>
        <div class="modal-body">
          <form class="" action="" method="post">
            <?php echo $__env->make('tasks.addtaskform', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
          <button type="button" class="btn btn-primary">Guardar</button>
        </div>
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>