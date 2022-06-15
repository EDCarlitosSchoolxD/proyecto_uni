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
<a class="btn btn-primary" href="{{route('admin')}}">Panel de admin</a>
<a href="{{url('/universidad').'/'.$datos['universidad_id']}}">Regresar</a> 
@endauth


<div class="container border p-4">
    <form method="POST" enctype="multipart/form-data">
        @csrf
    
        @include('template.CarreraForm')
        <input type="submit" class="btn btn-success mt-4" value="Enviar">
    </form>
</div>



@endsection