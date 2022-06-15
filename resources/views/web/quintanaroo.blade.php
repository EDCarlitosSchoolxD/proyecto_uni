@extends('app')

<link rel="stylesheet" href="{{asset('css/universidades.css')}}">
@section('content')

<br>
<br>
<br>
<br>
<br>
<br>
<br>


<h1>Universidades del estado</h1>

<section id="Carreras">
    <div class="menu">    
        @foreach ($universidades as $universidad)
        <div class="opciones">
            <br>
            <b><p>{{$universidad->uniNombre}}</p></b>
            <br>

            <img style="width: 200px" src="{{asset('storage').'/'.$universidad->imagen}}">
            <br>

            <p>Tipo: {{$universidad->estado}}<br></p>
            <p>Estado: {{$universidad->lugar}}</p>
            <a href="{{url('/universidad').'/'.$universidad->id}}"><button>+ Info</button></a>
            <br><br>
        </div>
        @endforeach
        

    
        
</section>


@endsection