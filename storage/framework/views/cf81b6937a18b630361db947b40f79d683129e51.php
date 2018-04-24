<div class="form-group">
  <label>Nombre de la empresa</label>
  <input type="text" class="form-control" id="business_name" name="business_name" value="<?php echo e(old('business_name', isset($cliente) ? $cliente->business_name : '')); ?>">
</div>
<div class="form-group">
  <label>Cédula o RIF</label>
  <input type="text" class="form-control" id="id_number"  name="id_number" value="<?php echo e(old('id_number', isset($cliente) ? $cliente->id_number : '')); ?>">
</div>
<div class="form-group">
  <label>Correo electronico</label>
  <input type="email" class="form-control" id="email" placeholder="ejemplo@softronixcompany.com" name="email" value="<?php echo e(old('email', isset($cliente) ? $cliente->email : '')); ?>">
</div>
<div class="form-group">
  <label>Telefono</label>
  <input type="number" class="form-control" id="phone" placeholder="+584141234567" name="phone" value="<?php echo e(old('phone', isset($cliente) ? $cliente->phone : '')); ?>">
</div>
<div class="form-group">
<label>Pais</label>
<select type="text" class="form-control select2" id="country_id" name="country_id">
  <?php $__currentLoopData = $country; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pais): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<option value="<?php echo e($pais->id); ?>" <?php echo e(isset($cliente) ? ($cliente->country_id == $pais->id ? 'selected': '') : $pais->id == 237 ? 'selected': ''); ?>><?php echo e($pais->name); ?></option>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</select>
</div>
<div class="form-group">
<label>Estado / Provincia</label>
<select type="text" class="form-control select2"  id="state_id" name="state_id">
  <?php $__currentLoopData = $states; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $estado): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<option  value="<?php echo e($estado->id); ?>" <?php echo e(isset($cliente) ? ($cliente->state_id == $estado->id ? 'selected': '') : ''); ?>><?php echo e($estado->name); ?></option>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</select>
</div>
<div class="form-group">
  <div class="form-group">
     <label for="description">Descripción</label>
     <textarea name="description" class="form-control" rows="2" type="" id="description" placeholder="Ingrese una breve Descripción  "><?php echo e(old('description', isset($cliente) ? $cliente->description : '')); ?></textarea>
   </div>
</div>
</div>
<input type="hidden" id="_rutaEstado" value="<?php echo e(route('getStates')); ?>">
