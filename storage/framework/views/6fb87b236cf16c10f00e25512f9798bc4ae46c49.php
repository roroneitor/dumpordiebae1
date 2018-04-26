<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="/img/negrito.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo e(Auth::user()->name); ?></p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> En Línea</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">DASHBOARD</li>
        <!-- Optionally, you can add icons to the links -->
        <li class="active"><a href=""><i class="fa fa-link"></i> <span>Principal</span></a></li>
      </ul>

<?php if(Auth::user()->hasRole('Administrador')): ?>
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header"><i class="fa fa-user"></i> USUARIOS</li>
        <!-- Optionally, you can add icons to the links -->
        <li><a href="<?php echo e(route('register')); ?>"><span>Registrar Usuario</span></a></li>
        <li><a href="<?php echo e(route('AsignarRol')); ?>"><span>Asignar rol</span></a></li>
      </ul>

      <ul class="sidebar-menu" data-widget="tree">
        <li class="header"><i class="fa fa-users"></i> CLIENTES</li>
        <!-- Optionally, you can add icons to the links -->
        <li><a href="<?php echo e(route('CrearCliente')); ?>"><span>Agregar cliente</span></a></li>
        <li><a href="<?php echo e(route('MostrarClientes')); ?>">Ver clientes</span></a></li>
      </ul>
<?php endif; ?>
<?php if(Auth::user()->hasRole('Administrador', 'Lider de Proyecto') ): ?>
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header"><i class="fa fa-file-text"></i> PROYECTOS</li>
        <!-- Optionally, you can add icons to the links -->
        <?php if(Auth::user()->hasRole('Administrador')): ?>
        <li><a href="<?php echo e(route('CrearProyecto')); ?>"><span>Crear proyecto</span></a></li>
          <?php endif; ?>
        <li><a href="<?php echo e(route('MostrarProyectos')); ?>"><span>Ver proyectos</span></a></li>
      </ul>
<?php endif; ?>
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header"><i class="fa fa-tasks"></i> TAREAS</li>
        <!-- Optionally, you can add icons to the links -->
        <li><a href=""><span>Agregar tareas</span></a></li>
        <li><a href=""><span>Ver tareas</span></a></li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>
