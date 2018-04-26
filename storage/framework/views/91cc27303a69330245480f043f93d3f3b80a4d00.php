<?php $__env->startSection('content'); ?>
<!-- general form elements -->
<div class="box box-primary">
  <div class="box-header with-border">
    <h3 class="box-title">Asignar Rol</h3>
  </div>
  <!-- /.box-header -->
  <!-- form start -->
  <form method="POST" action="<?php echo e(route('GuardarRol')); ?>">
    <?php echo e(method_field('PATCH')); ?>

    <?php echo e(csrf_field()); ?>

    <div class="box-body">
      <div class="form-group">
      <label>Usuario</label>
      <select type="text" class="form-control select2" id="user_id" name="user_id">
<?php $__currentLoopData = $Usuarios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Usuario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <option value="<?php echo e($Usuario->id); ?>"><?php echo e($Usuario->name); ?></option>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </select>
      </div>
      <div class="form-group">
      <label>Rol</label>
      <select type="text" class="form-control select2" id="role_id" name="role_id">
        <?php $__currentLoopData = $Roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rol): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <option value="<?php echo e($rol->id); ?>"><?php echo e($rol->name); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </select>
      </div>
      <div class="box-footer">
        <button type="submit" class="btn btn-primary">Asignar</button>
        <a href="<?php echo e(route('home')); ?>" type="button" class="btn btn-primary">Cancelar</a>
      </div>

    </form>
  </div>
<?php echo $__env->make('layouts.errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>