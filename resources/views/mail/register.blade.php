<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
    @if($msg->name)
    Hello {{$name}},
    @endif
    {{$msg->contenu}} @if($msg->email) votre adresse email est {{$email}}
    @endif
    @if($msg->password)
     et votre mot de passe {{$password}}
     @endif
</body>
</html>