@extends('main')

@section('content')
    <form action="{{ url('users') }}" method="POST">
        @csrf
        <input type="text" name="name" id="name" placeholder="Ingrese su nombre" required>
        <input type="email" name="email" id="email" placeholder="Ingrese su email" required>
        <input type="password" name="password" id="password" placeholder="Ingrese su contraseña" required>
        <input type="submit" value="Registrar">
    </form>
@endsection
