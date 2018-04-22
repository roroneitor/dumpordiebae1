<div class="form-group">
  <label>Titulo del Proyecto</label>
  <input type="text" class="form-control" id="title" name="title" value="<?php echo e(old('title', isset($proyecto) ? $proyecto->title : '')); ?>">
</div>
<div class="form-group">
<label>Cliente</label>
<select type="text" class="form-control select2" id="client_id" name="client_id">
<?php $__currentLoopData = $clientes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cliente): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<option value"<?php echo e($cliente->id); ?>"><?php echo e($cliente->business_name); ?> </option>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</select>
</div>
<div class="form-group">
<label>Programador Responsable</label>
<select type="text" class="form-control select2" id="responsible_user_id" name="responsible_user_id">
<?php $__currentLoopData = $usuarios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $usuario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<option value"<?php echo e($usuario->id); ?>"><?php echo e($usuario->name); ?></option>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</select>
</div>
<div class="form-group">
  <label>Fecha Inicial</label>
  <input type="date" class="form-control" id="date_init"  name="date_init" value="<?php echo e(old('date_init', isset($proyecto) ? $proyecto->date_init : '')); ?>">
</div>
<div class="form-group">
  <label>Fecha Final</label>
  <input type="date" class="form-control" id="date_end" placeholder="" name="date_end" value="<?php echo e(old('date_end', isset($proyecto) ? $proyecto->date_end : '')); ?>">
</div>
  <div class="form-group">
     <label for="description">Descripción</label>
     <textarea name="description" class="form-control" rows="2" type="" id="description" placeholder="Ingrese una breve Descripción  "><?php echo e(old('description', isset($proyecto) ? $proyecto->description : '')); ?></textarea>
   </div>
