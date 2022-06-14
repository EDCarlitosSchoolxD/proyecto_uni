@extends('app')


@section('content')

<div class="container border mt-5 p-4">
    <form action="{{url('/admin/'.$datos['id'])}}" method="POST"  enctype="multipart/form-data">
        @csrf
        {{method_field('PATCH')}}


        @include('template.UniCrearForm')

        <input type="submit" value="Actualizar">


    </form>
</div>
    



@endsection