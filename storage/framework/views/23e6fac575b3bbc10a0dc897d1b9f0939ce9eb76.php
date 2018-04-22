<header class="main-header">

    <!-- Logo -->
    <a href="" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>S</b>TX</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Softronix</b>Company</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Navegación</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">

          <!-- Control Sidebar Toggle Button -->
          <li>

            <a href="<?php echo e(route('logout')); ?>"
                     onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">Cerrar Sesión  <i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
      <?php echo csrf_field(); ?>
    </form>
  </header>
  </header>
