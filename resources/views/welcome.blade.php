<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    @auth
    <a href="/admin">Admin</a>
    <form action="/logout" method="POST">
        @csrf
        <a href="#" onclick="this.closest('form').submit()">Logout</a>
    </form>
        @else
        <a href="/login">Log in</a>

    @endauth

    @if (session('status'))
        <br>
        {{session('status')}}
    @endif

  



</body>
</html>