<label for="">Miembros</label>
<ul class="list-group usuariosLista">
  @forelse ($usuarios as $usuario)
    <li class="list-group-item">
      <input type="checkbox" name="usuario[]" value="{{$usuario->id}}" {{ isset($proyecto) ? ($proyecto->desarrolladores()->where('user_id', auth()->user()->id)->count() == 1 ? 'checked' : '') : '' }}>
      {{ $usuario->name }}
    </li>
  @empty
    <li class="list-group-item"><span class="glyphicon glyphicon-flag"></span> No hay desarrolladores registrados.</li>
  @endforelse
</ul>
