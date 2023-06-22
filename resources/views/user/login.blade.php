<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>Login User</h2>
    @error('email')
   <b>{{ $message }}</b>
    @enderror
    <form action={{ route("post-user") }} method="POST">
        @csrf

        <input type="text" name="email" id="" placeholder="Email"><br/>
        <input type="password" name="password" id="" placeholder="Password"><br/>
        <button>Connexion</button>
    </form>
</body>
</html>

