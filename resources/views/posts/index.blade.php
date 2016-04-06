@extends('app')

@section('content')
    <h1>My posts</h1>
    <hr>
    @foreach($posts as $post)
        <article>
            <h2>
                <a href="{{ action('PostsController@show', [$post->id]) }}">{{ $post->title }}</a>
            </h2>
            <div class="modal-body">{{ $post->body }}</div>
        </article>
    @endforeach
@stop