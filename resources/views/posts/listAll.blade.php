@extends('main')

@section('css')
    <link rel="stylesheet" href="{{ asset('/css/posts/show.css') }}">
@endsection

@section('title')
    Posts
@endsection

@section('content')
    @forelse ($posts as $post)
        <div class="show__posts">
            <a href="#">
                <h1 class="posts__title"><span>#</span> {{ $post->title }}</h1>
            </a>
        </div>
    @empty
        <p>No se han realizado publicaciones</p>
    @endforelse
@endsection


@section('script')
@endsection
