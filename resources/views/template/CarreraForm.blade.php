<div>
    <label for="nombre" class="form-label">Nombre de la carrera:</label>
    <input type="text" name="nombre" class="form-control">
</div>
<div>
    <label for="imagen" class="form-label">Imagen de la carrera</label>
    <input type="file" class="form-control" accept="image/jpeg, image/png" name="imagen">
</div>
<div>
    <label for="plan_estudio">Plan de estudio</label>
    <input type="file" class="form-control" accept="application/pdf,application/vnd.ms-excel" name="plan_estudio">
</div>
<div>
    <label for="tipo_id" class="form-label">Tipo</label>
    <select name="tipo_id" class="form-control" id="tipo_id">
        @foreach ($data['tipoInfo'] as $dato)
            <option value="{{$dato->id}}">{{$dato->tipoC}}</option>
        @endforeach
    </select>
</div>
<div>
    <label for="descripcion" class="form-label">Descripcion:</label>
    <textarea name="descripcion" id="descripcion" cols="30" rows="10" class="form-control"></textarea>    
</div>
<div>
    <label for="trabajo" class="form-label">¿En que podras Trabajar?:</label>
    <textarea name="trabajo" id="trabajo" cols="30" rows="10" class="form-control"></textarea>    
</div>
<div>
    <label for="objetivo" class="form-label">Objetivo de la carrera:</label>
    <textarea name="objetivo" id="objetivo" cols="30" rows="10" class="form-control"></textarea>    
</div>
<div>
    <label for="aprendizaje" class="form-label">Aprendizaje obtenido</label>
    <textarea name="aprendizaje" id="aprendizaje" cols="30" rows="10" class="form-control"></textarea>    
</div>
<div>
    <label for="perfil_ingreso" class="form-label">Perfil de ingreso</label>
    <textarea name="perfil_ingreso" id="perfil_ingreso" cols="30" rows="10" class="form-control"></textarea>    
</div>
<div>
    <label for="perfil_egreso" class="form-label">Perfil de ingreso</label>
    <textarea name="perfil_egreso" id="perfil_egreso" cols="30" rows="10" class="form-control"></textarea>    
</div>
<div>
    <input type="hidden" value="{{$data['universidad_id']}}" name="universidad_id">
</div>