<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="{{url('users')}}" method="POST">
        @csrf
        <input type="text" name="name" id="name" placeholder="Ingrese su nombre" required>
        <input type="email" name="email" id="email" placeholder="Ingrese su email" required>
        <input type="password" name="password" id="password" placeholder="Ingrese su contraseña" required>
        <input type="submit" value="Registrar">
    </form>
</body>

</html>
