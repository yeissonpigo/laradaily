@extends('main')

@section('css')
    <link rel="stylesheet" href="{{ asset('/css/index.css') }}">
@endsection

@section('title')
    Inicio
@endsection

@section('content')
    <div class="mother">
        <div class="title">
            <h1>¿Qué es laravel?</h1>
            <p style="color: var(--white-color); font-size: 0.7rem">Laravel es uno de los frameworks más famosos de PHP, el cual permite crear páginas web. Al ser un framework de PHP, es un framework enfocado a Backend. Sin embargo, permite implementar frameworks de frontend.</p>
        </div>
    </div>
    <div class="content__this">
        <strong style="color: var(--orange-color); font-size: 1rem">#</strong>¿Qué es Laradaily?
        <p>Laradaily es un blog donde cualquier persona podrá publicar entradas, y compartir su conocimiento. Los temas principales de Laradaily son vida personal, y desarrollo. Si bien, Laradaily se enfoca en Laravel, y PHP, también se podrán ver publicaciones sobre Javascript, Python, java, etc.</p>
    </div>
    <div class="content__this">
        <strong style="color: var(--orange-color); font-size: 1rem">#</strong>¿Por qué formar parte del equipo?
        <p>Si te postulas a colaborador de Laradaily, tendrás la oportunidad de poner a prueba conocimientos básicos requeridos en cualquier puesto de desarrollador: HTML, CSS, Javascript, PHP, Laravel, bases de datos, git, github, bash, entre otros. Además, al tener acceso al repositorio, podrás poner este proyecto como parte de tu experiencia freelance en tu hoja de vida.</p>
    </div>
@endsection
