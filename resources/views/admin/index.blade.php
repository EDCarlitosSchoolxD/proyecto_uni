@extends('app')

@section('content')

<br><br>
<br>
<br>
<br><br>
<br>
<a class="btn btn-success m-2" href="{{route('universidad-crear')}}">Agregar Universidad</a>


<table class="mt-4 table table-light">
    <thead class="thead-dark">
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Tipo</th>
            <th>Estado</th>
            <th>Imagen</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
       
        @foreach ($universidades as $universidad)
            <tr>
            <td>{{$universidad->id}}</td>
            <td>{{$universidad->nombre}}</td>
            <td>{{$universidad->tipo_id}}</td>
            <td>{{$universidad->estado_id}}</td>
            <td>
                <img style="width: 60px" src="{{asset('storage').'/'.$universidad->imagen}}">
            </td>
            <td>
                <form action="{{ url('/admin/'.$universidad->id)}}" method="POST">
                    @csrf
                    {{method_field('DELETE')}}
                    <input class="btn btn-danger" type="submit" value="Eliminar" onclick="return confirm('¿Quieres borrar?')">
                </form>|
                <a href="{{url('/admin/'.$universidad->id.'/edit')}}">Editar</a>
                |Ver mas</td>
            </tr>
        @endforeach
    </tbody>
</table>


@endsection