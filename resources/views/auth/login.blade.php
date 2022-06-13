 @extends('app')


@section('content')


    @foreach ($errors->all() as $error)
    <div class="alert alert-primary" role="alert">
        {{$error}}
    </div>
    @endforeach
 


 <div style="max-width: 400px" class="container w-75 mt-4 border">

        <img style="width: 100%" src="{{ asset('img/project/logo.png') }}" alt="logo">


    <form action="" method="POST">
        @csrf
        <div class="mt-2">
            <label class="label-control" for="email">Email</label>
            <input type="email" required autofocus class="form-control" value="{{old('email')}}" name="email">
        </div>
        <div class="mt-2">
            <label class="label-control" for="email">Contraseña</label>
            <input type="password" required class="form-control" name="password">
        </div>

        <input type="submit" value="Login" class="btn btn-primary mt-2 mb-2">
    </form>
 </div>

@endsection