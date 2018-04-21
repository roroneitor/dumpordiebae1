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
  <input type="tel" class="form-control" id="phone" placeholder="+584148221649" name="phone" value="<?php echo e(old('phone', isset($cliente) ? $cliente->phone : '')); ?>">
</div>
<div class="form-group">
<label>Pais</label>
<select type="text" class="form-control" id="country_id" placeholder="Venezuela" name="country_id">
<option>Venezuela</option>
</select>
</div>
<div class="form-group">
<label>Estado / Provincia</label>
<select type="text" class="form-control" id="state_id" placeholder="Venezuela" name="state_id">
<option>Porlamar</option>
</select>
</div>
<div class="form-group">
  <div class="form-group">
     <label for="description">Descripción</label>
     <textarea name="description" class="form-control" rows="2" type="" id="description" placeholder="Ingrese una breve Descripción  "><?php echo e(old('description', isset($cliente) ? $cliente->description : '')); ?></textarea>
   </div>
</div>
</div>
