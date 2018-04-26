

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>STX | Registro</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<?php echo $__env->make('layouts.estilos', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href=""><b>Softronix</b>Company</a>
  </div>

  <div class="register-box-body">

    <p class="login-box-msg"><b>REGISTRAR UN USUARIO NUEVO</b></p>

    <form action="<?php echo e(route('register')); ?>" method="post">
      <?php echo csrf_field(); ?>
      <div class="form-group has-feedback">
        <input placeholder="Nombre completo" id="name" type="text" class="form-control<?php echo e($errors->has('name') ? ' is-invalid' : ''); ?>" name="name" value="<?php echo e(old('name')); ?>" required autofocus>
        <?php if($errors->has('name')): ?>
            <span class="invalid-feedback">
                <strong><?php echo e($errors->first('name')); ?></strong>
            </span>
        <?php endif; ?>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input placeholder="Correo" id="email" type="email" class="form-control<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>" name="email" value="<?php echo e(old('email')); ?>" required>
        <?php if($errors->has('email')): ?>
            <span class="invalid-feedback">
                <strong><?php echo e($errors->first('email')); ?></strong>
            </span>
        <?php endif; ?>
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input placeholder="Telefono" id="phone" type="phone" class="form-control" name="phone" value="<?php echo e(old('phone')); ?>" required>
        <span class="glyphicon glyphicon-earphone form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input placeholder="Contraseña" id="password" type="password" class="form-control<?php echo e($errors->has('password') ? ' is-invalid' : ''); ?>" name="password" required>
        <?php if($errors->has('password')): ?>
            <span class="invalid-feedback">
                <strong><?php echo e($errors->first('password')); ?></strong>
            </span>
        <?php endif; ?>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirmar contraseña" required>
        <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
      </div>
      <div class="form-row text-center">
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Registrar usuario</button>
        </div>
     </div>
    </form>
  </div>
  <!-- /.form-box -->
</div>
<!-- /.register-box -->

<?php echo $__env->make('layouts.scripts', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->yieldContent('scripts'); ?>
</body>
</html>
