@extends('app')


@section('content')

<br><br><br><br>
<div class="container border mt-5 p-4" >
        <form method="POST" enctype="multipart/form-data">
        @csrf

        @include('template.UniCrearForm')            
            

        <input type="submit" value="Agregar" class="btn btn-success mt-4">

        </form>
    
</div>


@endsection