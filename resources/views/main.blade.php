<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('/css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/footer.css') }}">
    @yield('css')
    <script src="https://kit.fontawesome.com/bace6cc7e8.js" crossorigin="anonymous"></script>
    <title> @yield('title') </title>
</head>

<body>
    <div class="nav" id="navbar">
        <div class="nav__mobile" id="navbar__top">
            <div class="nav__logo">
                <img src="{{ asset('/img/laravel.png') }}" alt="Logo de laravel" id="img_logo">
                <p id="text_logo">Laradaily</p>
            </div>
            <div class="div__options">
                <ul class="nav__options">
                    <li class="element1"><a href="/">Inicio</a></li>
                    <li class="element2"><a href="/collaborate">Colaborar</a></li>
                    <li class="element3"><a href="https://yeissonbackend.com">Contratar</a></li>
                    <li class="element4"><a href="">Equipo</a></li>
                </ul>
            </div>
            <div class="div__user">
                <ul class="nav__user">
                    @guest
                        <li class="element1"><a href="{{ url('auth') }}">Ingresar</a></li>
                        <li class="element2"><a href="{{ url('users/create') }}">Registrar</a></li>
                    @endguest
                    @auth
                        <li class="dropdown">
                            <button class="dropbtn">
                                {{ Auth::user()->name }}
                            </button>
                        </li>
                        <li class="element2"><a href="{{ url('auth/logout') }}"
                                onclick="event.preventDefault(); document.getElementById('form_logout').submit();">Logout</a>
                        </li>
                        <form action="{{ url('auth/logout') }}" method="POST" id="form_logout">@csrf</form>
                    @endauth
                </ul>
            </div>
            <div class="burger" id="burger">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
            </div>
        </div>
    </div>
    <div class="nav" id="slide">
        <div class="slide">
            <div class="nav__ul">
                <ul class="nav__options">
                    <li class="element1"><a href="/">Inicio</a></li>
                    <li class="element2"><a href="/collaborate">Colaborar</a></li>
                    <li class="element3"><a href="https://yeissonbackend.com" target=”_blank”>Contratar</a></li>
                    <li class="element4"><a href="">Equipo</a></li>
                </ul>
            </div>
            <div class="nav__ul">
                <ul class="nav__user">
                    @guest
                        <li class="element1"><a href="{{ url('auth') }}">Ingresar</a></li>
                        <li class="element2"><a href="{{ url('users/create') }}">Registrar</a></li>
                    @endguest
                    @auth
                        <li class="element1 dropdown">
                            <button class="dropbtn">
                                {{ Auth::user()->name }}
                            </button>
                            <div class="drop-content">
                                <a href="{{ url('posts/create') }}">Crear post</a>
                                <a href="#">Ver mis posts</a>
                            </div>
                        </li>
                        <li class="element2"><a href="{{ url('auth/logout') }}"
                                onclick="event.preventDefault(); document.getElementById('form_logout').submit();">Logout</a>
                        </li>
                        <form action="{{ url('auth/logout') }}" method="POST" id="form_logout">@csrf</form>
                    @endauth
                </ul>
            </div>
        </div>
    </div>


    @include('flash-message')


    <div class="content">
        @yield('content')
    </div>


    <div class="footer">
        <p>Laradaily</p>
        <div class="footer__members">
            Miembros
            <ul>
                <li>Yeisson Pinilla</li>
            </ul>
        </div>
        <div class="footer__contact">
            Contacto
            <ul>
                <li><a href="https://www.yeissonbackend.com">Administrador</a></li>
            </ul>
        </div>
        <div class="footer__description">
            Nosotros
            <ul>
                <li>Somos un blog dedicado a compartir conocimiento en diferentes lenguajes de programación, diferentes
                    frameworks. Sin embargo, el principal tema tratado es Laravel. Sin ánimo de lucro.</li>
            </ul>
        </div>
        <div class="footer__copyright">
            Copyright &copy; 2021
        </div>
    </div>


    <div class="logo__footer">
        <img src="{{ asset('/img/laravel.png') }}" alt="Logo de laravel" id="img_logo">
    </div>

    <script src="{{ asset('/js/navbar.js') }}"></script>
    @yield('script')
</body>

</html>
