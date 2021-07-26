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
            <div>
                <input type="text" placeholder="Su contenido" name="content[part1][txt]" id="content" required>
            </div>
            <div class="image" id="input_image11">
                <input type="file" id="fileName11" accept=".jpg,.jpeg,.png,.gif"
                    onchange="loadFile(event)" name="content[part1][img][1]">
            </div>
            <div class="div__adding" id="referenceNodeAdd">
                <div>
                    <input type="button" value="Añadir imagen" onclick="createDiv(2)">
                </div>
                <div>
                    <input type="button" value="Añadir párrafo" onclick="createDiv()">
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