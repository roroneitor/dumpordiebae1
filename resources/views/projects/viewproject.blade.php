@extends('layouts.master')

@section('hojasdeestilo')
<link rel="stylesheet" href="{{asset('gantt/css/frappe-gantt.css')}}">
@endsection

@section('content')
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">{{$proyecto->title}}</h3>
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
              <button type="button" class="btn btn-sm btn-secondary">Cuarto de día</button>
              <button type="button" class="btn btn-sm btn-secondary">Medio día</button>
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
@endsection

@section('scripts')
<script src="{{asset('gantt/js/moment.min.js')}}"></script>
<script src="{{asset('gantt/js/snap.svg-min.js')}}"></script>
<script src="{{asset('gantt/js/frappe-gantt.min.js')}}"></script>
<script src="{{asset('gantt/index.js')}}"></script>
@endsection
