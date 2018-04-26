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
             <div class="gantt-container" style="overflow:scroll; box-sizing: inherit; display: block;">
                  <svg id="gantt-1"></svg>
             </div>
             <div class="gantt-container"style="overflow:scroll; box-sizing: inherit; display: block;"">
              <svg id="gantt-2"></svg>
            </div>
            <div class="btn-group mt-1 mx-auto" role="group">
              <button type="button" class="btn btn-sm btn-secondary">Quarter Day</button>
              <button type="button" class="btn btn-sm btn-secondary">Half Day</button>
              <button type="button" class="btn btn-sm btn-secondary">Día</button>
              <button type="button" class="btn btn-sm btn-secondary active">Semana</button>
              <button type="button" class="btn btn-sm btn-secondary">Mes</button>
            </div>
             <div class="gantt-container" style="overflow:scroll; box-sizing: inherit; display: block;">
                  <svg id="gantt-3"></svg>
             </div>
             <div class="gantt-container" style="overflow:scroll; box-sizing: inherit; display: block;">
                  <svg id="gantt-4"></svg>
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
<script src="<?php echo e(asset('gantt/index.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>