<div>
    <label for="nombre" class="form-label">Nombre de la universidad</label>
    <input type="text" value="{{isset($datos['universidad']['universidad']->nombre)?$datos['universidad']['universidad']->nombre:''}}" name="nombre" class="form-control">
</div>
<div>
    <label for="imagen" class="form-label">Imagen</label>
    <input type="file" class="form-control" accept="image/jpeg, image/png" name="imagen" >
    @if (isset($datos['universidad']['universidad']->imagen))
        <img width="100px" src="{{asset('storage').'/'.$datos['universidad']['universidad']->imagen}}">
    @endif
</div>

<div>
    <label class="form-label" for="tipo">Tipo</label>
    <select  class="form-control" name="tipo_id" id="tipo">
        @foreach ($datos['tipos'] as $tipo)
            <option {{isset($datos['universidad']['universidad']->tipo_id)?'selected':''}} value="{{$tipo->id}}">{{$tipo->tipoU}}</option>
        @endforeach
    </select>
</div>
<div>
    <label class="form-label" for="lugar">Lugar</label>
    <select  class="form-control" name="lugar_id" id="lugar">
        @foreach ($datos['lugares'] as $lugar)
            <option {{isset($datos['universidad']['universidad']->lugar_id)?'selected':''}} value="{{$lugar->id}}">{{$lugar->lugar}}</option>
        @endforeach
    </select>
</div>
<div>
    <label class="form-label" for="estados">Estado</label>
    <select class="form-control" name="estado_id" id="estados">
        {{isset($datos['estados'])}}
        @foreach ($datos['estados'] as $estado)
            <option {{isset($datos['universidad']['universidad']->estado_id)?'selected':''}} value="{{$estado->id}}">{{$estado->estado}}</option>
         @endforeach
        </select>
    </div>
<div>



    <label for="nombre" class="form-label">Telefono</label>
    <input value="{{isset($datos['universidad']['universidad']->telefono)?$datos['universidad']['universidad']->telefono:''}}" type="text" name="telefono" class="form-control">
</div>
<div>
    <label for="nombre" class="form-label">Direccion</label>
    <input value="{{isset($datos['universidad']['universidad']->direccion)?$datos['universidad']['universidad']->direccion:''}}" type="text" name="direccion" class="form-control">
</div>
<div>
    <label for="nombre" class="form-label">Url Web</label>
    <input value="{{isset($datos['universidad']['universidad']->url_web)?$datos['universidad']['universidad']->url_web:''}}" type="text" name="url_web" class="form-control">
</div>



@yield('form')