<label for="">Miembros</label>
<ul class="list-group usuariosLista">
  <?php $__empty_1 = true; $__currentLoopData = $usuarios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $usuario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
    <li class="list-group-item">
      <input type="checkbox" name="usuario[]" value="<?php echo e($usuario->id); ?>" <?php echo e(isset($proyecto) ? ($proyecto->desarrolladores()->where('user_id', auth()->user()->id)->count() == 1 ? 'checked' : '') : ''); ?>>
      <?php echo e($usuario->name); ?>

    </li>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
    <li class="list-group-item"><span class="glyphicon glyphicon-flag"></span> No hay desarrolladores registrados.</li>
  <?php endif; ?>
</ul>
