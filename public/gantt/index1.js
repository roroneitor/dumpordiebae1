var tasks = [
     @dd($proyecto->modulos)
@foreach ($modulo as $proyecto->modulos)
@foreach ($task as $modulo->tareas)
  {
    id: '{{$task->id}}',
    name: '{{$task->description}}',
    start: '{{date("Y-M-d", $task->date_init)}}',
    end: '{{date("Y-M-d", $task->date_end)}}',
    progress: {{$task->status_id}},
    module: {{$task->module_id}},
    priority: {{$task->priority_id}},
    assigned_user: {{$task->assigned_user_id}},
  },
@endforeach
@endforeach
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
