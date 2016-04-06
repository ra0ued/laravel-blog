@extends('app')

@section('content')
    <h1>Write a new post:</h1>
    {!! Form::open(['url' => 'posts']) !!}
        @include('posts.form', ['submitButtonText' => 'Add Post'])
    {!! Form::close() !!}

    @include('errors.list')

@stop