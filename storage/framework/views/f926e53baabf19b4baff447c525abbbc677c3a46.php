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
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Usuarios</li>
        <!-- Optionally, you can add icons to the links -->
        <li><a href="<?php echo e(route('register')); ?>"><i class="fa fa-link"></i> <span>Registrar Usuario</span></a></li>
      </ul>
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">CLIENTES</li>
        <!-- Optionally, you can add icons to the links -->
        <li><a href="<?php echo e(route('CrearCliente')); ?>"><i class="fa fa-link"></i> <span>Agregar cliente</span></a></li>
        <li><a href="<?php echo e(route('MostrarClientes')); ?>"><i class="fa fa-link"></i> <span>Ver clientes</span></a></li>
      </ul>
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">PROYECTOS</li>
        <!-- Optionally, you can add icons to the links -->
        <li><a href="<?php echo e(route('CrearProyecto')); ?>"><i class="fa fa-link"></i> <span>Crear proyecto</span></a></li>
        <li><a href="<?php echo e(route('MostrarProyectos')); ?>"><i class="fa fa-link"></i> <span>Ver proyectos</span></a></li>
      </ul>
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">TAREAS ?</li>
        <!-- Optionally, you can add icons to the links -->
        <li><a href=""><i class="fa fa-link"></i> <span>ALGO CON TAREAS ?</span></a></li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>
