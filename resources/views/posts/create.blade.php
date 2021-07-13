@extends('main')

@section('css')
    <link rel="stylesheet" href="{{ asset('/css/form.css') }}">
@endsection

@section('title')
    Create post
@endsection

@section('content')
    <form action="{{ url('posts') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <fieldset>
            <legend>Crear post</legend>
            <div>
                <input type="text" placeholder="Titulo" name="title" id="title" maxlength="64" required>
            </div>
            <div id="referenceNode">
                <input type="text" placeholder="Su contenido" name="content" id="content" required>
            </div>
            <div class="image" id="input_image">
                <input name="input_image1" type="file" id="fileName" accept=".jpg,.jpeg,.png,.gif"
                    onchange="loadFile(event)">
            </div>
            <div class="div__adding">
                <div>
                    <input type="button" value="Añadir imagen">
                </div>
                <div>
                    <input type="button" value="Añadir párrafo">
                </div>
            </div>
            <div>
                <div class="submit">
                    <input type="submit" value="Publicar">
                </div>
            </div>
        </fieldset>
    </form>
@endsection


@section('script')
<script src="{{ asset('/js/posts/create.js') }}"></script>
@endsection