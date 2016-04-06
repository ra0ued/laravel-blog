@extends('app')

@section('content')
    <h1>Editing {!! $post->title !!}</h1>
    {!! Form::model($post, ['method' => 'PATCH', 'url' => 'posts/' . $post->id]) !!}
        @include('posts.form', ['submitButtonText' => 'Update Post'])
    {!! Form::close() !!}
    @include('errors.list')
@stop
