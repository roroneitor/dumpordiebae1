<div class="form-group">
  <label>Titulo del Proyecto</label>
  <input type="text" class="form-control" id="title" name="title" value="{{ old('title', isset($proyecto) ? $proyecto->title : '') }}">
</div>
<div class="form-group">
  <label>Fecha Inicial</label>
  <input type="date" class="form-control" id="date_init"  name="date_init" value="{{ old('date_init', isset($proyecto) ? $proyecto->date_init : '') }}">
</div>
<div class="form-group">
  <label>Fecha Final</label>
  <input type="date" class="form-control" id="date_end" placeholder="" name="date_end" value="{{ old('date_end', isset($proyecto) ? $proyecto->date_end : '') }}">
</div>
  <div class="form-group">
     <label for="description">Descripción</label>
     <textarea name="description" class="form-control" rows="2" type="" id="description" placeholder="Ingrese una breve Descripción  ">{{ old('description', isset($proyecto) ? $proyecto->description : '') }}</textarea>
   </div>
