<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
     <form action="{{route('expert.register')}}" method="POST">
        @csrf
        <input type="text" name="fullname" placeholder="name"><br>
        <input type="email" name="email" placeholder="email"> <br>
        <input type="password" name="password"><br>

        <button>Valider</button>
    </form>
</body>
</html>
