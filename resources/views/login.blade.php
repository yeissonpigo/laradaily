@extends('main')

@section('css')
    <link rel="stylesheet" href="{{ asset('/css/form.css') }}">
@endsection

@section('title')
    Ingresar
@endsection

@section('content')
    <form action="{{ url('auth/login') }}" method="POST">
        @csrf
        <fieldset>
            <legend>Ingresa</legend>
            <div>
                <input type="email" name="email" id="email" placeholder="Ingrese su email" required>
            </div>
            <div>
                <input type="password" name="password" id="password" placeholder="Ingrese su contraseña" required>
            </div>
            <div>
                <div class="submit">
                    <input type="submit" value="Ingresar">
                </div>
            </div>
        </fieldset>
    </form>
@endsection
