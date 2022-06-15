@extends('app')


@section('content')

<br><br><br><br>
<br><br><br>


@auth
<a class="btn btn-primary" href="{{route('admin')}}">Regresar</a>
@endauth


<h1>{{$datos['universidad'][0]->nombre}}</h1>
<h1>{{$datos['universidad'][0]->lugar}}</h1>
<h1>{{$datos['universidad'][0]->estado}}</h1>
<a class="btn btn-primary" href="{{$datos['universidad'][0]->url_web}}">PAGINA WEB</a>
<h1>{{$datos['universidad'][0]->telefono}}</h1>
<img src="{{asset('storage').'/'.$datos['universidad'][0]->imagen}}"></img>
<h1>{{$datos['universidad'][0]->tipoU}}</h1>
<h1>{{$datos['universidad'][0]->direccion}}</h1>




@auth
<a href="{{url('/admin/carreras/crear/'.$datos['universidad'][0]->id)}}">Agregar carrera</a>    
@endauth

<div style="display: flex;justify-content:space-evenly;flex-wrap: wrap">
@foreach ($datos['carreras'] as $carrera)
    
<div style="max-width: 320px" class="card">
    <img style="width: 100%;max-width: 320px;" class="card-img-top" src="{{asset('storage').'/'.$carrera->imagen}}" alt="">
    <div class="card-body">
        <h5 class="card-title">{{$carrera->nombre}}</h5>
        <p class="card-text">{{$carrera->estado}}</p>
        <p class="card-text">{{$carrera->tipoC}}</p>
        <p class="card-text">{{$carrera->lugar}}</p>
        <p class="card-text">{{$carrera->uniNombre}}</p>
        @auth
        <a class="btn btn-primary" href="{{url('/admin/carrera/edit').'/'.$carrera->id}}">Editar</a>
        <form method="POST" action="{{url('/universidad').'/'.$carrera->universidad_id}}">
            @csrf
            {{method_field('DELETE')}}
            <input class="btn btn-danger" type="submit" value="Eliminar" onclick="return confirm('¿Quieres borrar?')">
        </form>   
        @endauth
       
        <a class="btn btn-success" href="{{url('/universidad/carrera').'/'.$carrera->id}}">Ver mas</a>
    </div>
</div>
@endforeach
</div>


<pre>
</pre>

@endsection