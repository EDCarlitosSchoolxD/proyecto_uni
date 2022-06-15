@extends('app')



@section('content')
<br>
<br>
<br>
<br>
<br>
<br>
<br>
@auth
<a class="btn btn-primary" href="{{route('admin')}}">Regresar</a>   
@endauth

<h1>{{$datos[0]->nombre}}</h1>
<h1>Universidad: {{$datos[0]->uniNombre}}</h1>
<h1>Tipo: {{$datos[0]->tipoC}}</h1>
<h1>Descripcion: {{$datos[0]->descripcion}}</h1>
<h1>Objetivo de la carrera:{{$datos[0]->objetivo}}</h1>
<h1>¿Que aprenderas?{{$datos[0]->aprendizaje}}</h1>
<h1>¿En que podras trabajar?{{$datos[0]->trabajo}}</h1>
<h1>Perfil de ingreso:{{$datos[0]->perfil_ingreso}}</h1>
<h1>Perfil de egreso: {{$datos[0]->perfil_egreso}}</h1>

<img src="{{asset('storage').'/'.$datos[0]->imagen}}">

<a href="{{asset('storage').'/'.$datos[0]->plan_estudio}}">Plan de estudio</a>


@endsection