<div class="form-group">
  <label for="module">Agregar modulo</label>
  <div class="input-group">
    <input type="text" name="modulo" id="modulo" class="form-control">
    <span class="input-group-btn">
      <button type="button" id="addModulo" class="btn btn-primary">
        <i class="fa fa-plus"></i>
      </button>
    </span>
  </div>
</div>
<hr>
<b>Lista de modulos</b>
<ul class="list-group modulosLista">
  @if (isset($proyecto))
    <li class="list-group-item {{ $proyecto->modulos->count()==0 ?:'hide' }}"><i class="glyphicon glyphicon-flag"></i> No hay modulos agregados</li>
  @else
    <li class="list-group-item"><i class="glyphicon glyphicon-flag"></i> No hay modulos agregados</li>
  @endif
  <li class="list-group-item clone hide">
    <span></span>
    <input type="hidden" name="modulo[]" data-modulo-id="" data-modulo-titulo="" data-new="true">
    <span class="pull-right">
      <button type="button" name="button" class="btn btn-xs btn-primary moduleUpdate">
        <i class="glyphicon glyphicon-pencil"></i>
      </button>
      <button type="button" name="button" class="btn btn-xs btn-danger moduleDelete">
        <i class="glyphicon glyphicon-remove"></i>
      </button>
    </span>
  </li>
  @if (isset($proyecto))
    @foreach ($proyecto->modulos as $modulo)
      <li class="list-group-item">
        <span>{{ $modulo->title }}</span>
        <input type="hidden" name="modulo[]" data-modulo-id="{{ $modulo->id }}" data-modulo-titulo="{{ $modulo->title }}" data-new="false">
        <span class="pull-right">
          <button type="button" name="button" class="btn btn-xs btn-primary moduleUpdate">
            <i class="glyphicon glyphicon-pencil"></i>
          </button>
          <button type="button" name="button" class="btn btn-xs btn-danger moduleDelete">
            <i class="glyphicon glyphicon-remove"></i>
          </button>
        </span>
      </li>
    @endforeach
  @endif
</ul>
