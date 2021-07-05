@extends('main')

@section('navbar')
    <nav class="nav__mobile" id="navbar__top">
        <nav class="nav__logo">
            <img src="{{ asset('/img/laravel.png') }}" alt="Logo de laravel" id="img_logo">
            <p id="text_logo">Laradaily</p>
        </nav>
        <div class="burger" id="burger">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
    </nav>
    <nav class="slide" id="slide">
        <nav class="nav__ul">
            <ul class="nav__options">
                <li class="element1"><a href="">Inicio</a></li>
                <li class="element2"><a href="">Colaborar</a></li>
                <li class="element3"><a href="">Contratar</a></li>
                <li class="element4"><a href="">Equipo</a></li>
            </ul>
        </nav>
        <nav class="nav__ul">
            <ul class="nav__user">
                <li class="element1"><a href="">Ingresar</a></li>
                <li class="element2"><a href="{{ url('users/create') }}">Registrar</a></li>
            </ul>
        </nav>
    </nav>
@endsection
