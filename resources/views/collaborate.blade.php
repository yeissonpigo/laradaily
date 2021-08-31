@extends('main')

@section('css')
    <link rel="stylesheet" href="{{ asset('/css/form.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/index.css') }}">
@endsection

@section('title')
    Colaborar
@endsection

@section('content')
    <div class="mother">
        <p style="color: var(--white-color); font-size: 0.7rem; padding-right: 10px; padding-left: 10px">Si yas has leído sobre este proyecto, y estás interesado en formar parte del equipo, por favor envía tu solicitud
            en el siguiente formulario:</p>
    </div>
    <form action="{{ url('auth/login') }}" method="POST">
        @csrf
        <fieldset>
            <legend>Colaborar</legend>
            <div>
                <input type="email" name="email" id="email" placeholder="Ingrese su email" required>
            </div>
            <div>
                <input type="text" name="answer1" id="answer1" placeholder="¿Por qué desea formar parte del equipo?"
                    required>
            </div>
            <div>
                <input type="text" name="answer2" id="answer2"
                    placeholder="Cuéntanos acerca de tu experiencia."
                    required>
            </div>
            <div>
                <input type="text" name="answer2" id="answer2"
                    placeholder="Nombra aquellas tecnologías que conoces."
                    required>
            </div>
            <div>
                <div class="submit">
                    <input type="submit" value="Enviar">
                </div>
            </div>
        </fieldset>
    </form>
@endsection
