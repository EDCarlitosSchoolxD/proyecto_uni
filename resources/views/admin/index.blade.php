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
            <td>{{$universidad->tipoU}}</td>
            <td>{{$universidad->estado}}</td>
            <td>
                <img style="width: 60px" src="{{asset('storage').'/'.$universidad->imagen}}">
            </td>
            <td>
                <a class="btn btn-primary" href="{{url('/admin/'.$universidad->id.'/edit')}}">Editar</a>
                <br>
                <a class="btn btn-success" href="{{url('/universidad/'.$universidad->id)}}">Ver mas</a>
                <form action="{{ url('/admin/'.$universidad->id)}}" method="POST">
                    @csrf
                    {{method_field('DELETE')}}
                    <input class="btn btn-danger" type="submit" value="Eliminar" onclick="return confirm('¿Quieres borrar?')">
                </form>
            </td>
            </tr>
        @endforeach
    </tbody>
</table>


@endsection