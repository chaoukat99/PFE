<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('expert.save')}}" method="POST">
        @csrf
        <input type="email" name="email" id="" placeholder="email"> <br>
@error('email')
{{$message}}

@enderror

        <input type="password" name="password"  placeholder="name">

        @error('password')
{{$message}}
        @enderror
        <br>
        <button>Login</button>
    </form>

</body>
</html>
