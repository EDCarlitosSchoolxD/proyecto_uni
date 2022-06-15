@extends('app')



@section('content')

<br>
<br>
<br>
<br>
<br>
<br>
<br>

<div class="container border mt-5 p-4">
    <form action="{{url('/admin/carrera/edit').'/'.$datos['carrera']->id}}" method="POST" enctype="multipart/form-data">
        @csrf
        {{method_field('PATCH')}}
        @include('template.CarreraForm')
        <input type="submit" class="btn btn-success">
    </form>
</div>


@endsection