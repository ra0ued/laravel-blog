@extends('app')

@section('content')
        <article>
            <h2>{{ $post->title }}</h2>
            <div class="modal-body">{{ $post->body }}</div>
        </article>

@stop