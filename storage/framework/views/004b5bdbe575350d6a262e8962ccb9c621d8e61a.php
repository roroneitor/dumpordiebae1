<?php $__env->startSection('hojasdeestilo'); ?>
<link rel="stylesheet" href="<?php echo e(asset('gantt/css/frappe-gantt.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title"><?php echo e($proyecto->title); ?></h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
             <div class="gantt-container"style="overflow:scroll; box-sizing: inherit; display: block;">
              <svg id="gantt-2"></svg>
            </div>
            <div class="btn-group mt-1 mx-auto" role="group">
              <button type="button" class="btn btn-sm btn-secondary">Cuarto de día</button>
              <button type="button" class="btn btn-sm btn-secondary">Medio día</button>
              <button type="button" class="btn btn-sm btn-secondary">Día</button>
              <button type="button" class="btn btn-sm btn-secondary active">Semana</button>
              <button type="button" class="btn btn-sm btn-secondary">Mes</button>
            </div>
             <div class="gantt-container" style="overflow:scroll; box-sizing: inherit; display: block;">
                  <svg id="gantt-3"></svg>
             </div>
        </div>
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<script src="<?php echo e(asset('gantt/js/moment.min.js')); ?>"></script>
<script src="<?php echo e(asset('gantt/js/snap.svg-min.js')); ?>"></script>
<script src="<?php echo e(asset('gantt/js/frappe-gantt.min.js')); ?>"></script>
<script>
var tasks = [
<?php $__currentLoopData = $proyecto->modulos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $modulo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php $__currentLoopData = $modulo->tareas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $task): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
 {
    id: '<?php echo e($task->id); ?>',
    name: '<?php echo e($task->description); ?>',
    start: '<?php echo e(date("Y-m-d", strtotime($task->date_init))); ?>',
    end: '<?php echo e(date("Y-m-d", strtotime($task->date_end))); ?>',
    progress: <?php echo e($task->status_id); ?>,
    module: '<?php echo e($task->modulo->title); ?>',
    priority: '<?php echo e($task->prioridad->name); ?>',
    assigned_user: '<?php echo e($task->usuario->name); ?>',
 },
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
]

// change view mode example
var gantt2 = new Gantt("#gantt-2", tasks, {
     custom_popup_html: function(task) {
      const end_date = task._end.format('MMM D');
      return `
        <div class="details-container">
          <h5>${task.name}</h5>
          <p>Modulo: ${task.module}</p>
          <p>Prioridad: ${task.priority}</p>
          <p>Usuario Responsable: ${task.assigned_user}</p>
          <p>Final esperado: ${end_date}</p>
          <p>${task.progress}% completado!</p>
        </div>
      `;
    }
});
gantt2.change_view_mode('Week');

$(function() {
    $(".btn-group").on("click", "button", function() {
        $btn = $(this);
        var mode = $btn.text();
        gantt2.change_view_mode(mode);
        $btn.parent().find('button').removeClass('active');
        $btn.addClass('active');
    });
});

// event listener example
var gantt3 = new Gantt("#gantt-3", tasks, {
    on_click: function (task) {
        console.log(task);
    },
    on_date_change: function(task, start, end) {
        console.log(task, start, end);
    },
    on_progress_change: function(task, progress) {
        console.log(task, progress);
    },
    on_view_change: function(mode) {
        console.log(mode);
    }
});

</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>