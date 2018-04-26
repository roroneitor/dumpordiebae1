<?php $__env->startSection('content'); ?>
  <div class="panel panel-default">
    <div class="panel-heading">
    <h3><b>  <i class="fa fa-database"></i> Proyectos</b></h3>
    </div>
    <div class="panel-body"><h4>
      <?php echo e($numerodeproyectos); ?> proyectos creados
</h4>
    </div>
    <div class="panel-footer">
      <a href="<?php echo e(route('CrearProyecto')); ?>" class="btn btn-success "type="button"><b>+</b> Proyectos</a>
      <a href="<?php echo e(route('MostrarProyectos')); ?>" class="btn btn-primary "type="button">Ver proyectos</a>
    </div>
</div>

<div class="row">
  <div class="col-md-4">
    <div class="panel panel-default">
      <div class="panel-heading">
      <h3><b><i class="fa fa-tasks"></i></i> Tareas</b></h3>
      </div>
      <div class="panel-body"><h4>
        <?php echo e($numerodeproyectos); ?> tareas en curso
      </h4>
      </div>
      <div class="panel-footer">
        <a href="#" class="btn btn-success "type="button"><b>+</b> Tareas</a>
        <a href="#" class="btn btn-primary "type="button">Ver Tareas</a>
      </div>
    </div>
  </div>

  <div class="col-md-4">
    <div class="panel panel-default">
      <div class="panel-heading">
      <h3><b>  <i class="fa fa-user"></i></i> Usuarios</b></h3>
      </div>
      <div class="panel-body">
        <h4>
        <?php echo e($numerodeusuarios); ?> usuarios activos
        </h4>
      </div>
    </div>
  </div>

  <div class="col-md-4">
    <div class="panel panel-default">
      <div class="panel-heading">
      <h3><b> <i class="fa fa-users"></i> Clientes</b></h3>
      </div>
      <div class="panel-body">
        <h4>
        <?php echo e($numerodeclientes); ?> clientes
        </h4>
      </div>
      <div class="panel-footer">
        <a href="<?php echo e(route('CrearCliente')); ?>" class="btn btn-success "type="button"><b>+</b> Cliente</a>
        <a href="<?php echo e(route('MostrarClientes')); ?>" class="btn btn-primary "type="button">Ver clientes</a>
      </div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>