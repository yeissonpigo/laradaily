@extends('main')

@section('css')
@endsection

@section('title')
    Posts
@endsection

@section('content')
    @forelse ($posts as $post)
        <div>
            <h1>{{ $post->title }}</h1>
        </div>
    @empty
        <p>No se han realizado publicaciones</p>
    @endforelse
@endsection


@section('script')
@endsection
