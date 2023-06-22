<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
</head>
<body>
<h3>Register User</h3>
<form action={{ route("create.user") }} method="POST">
    @csrf
   <input type="text" name="nom" placeholder="Nom" ><br/>
    <input type="text" name="email" id="" placeholder="Email"><br/>
    <input type="password" name="pass" id="" placeholder="Password"><br/>
    <button>Connexion</button>
</form>
</body>
</html>
