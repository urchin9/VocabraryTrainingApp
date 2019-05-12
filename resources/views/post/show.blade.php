@extends('layouts.my')

@section('content')

<div class="container">
    <div class="show-post">
        <p class="post-title">{{ $post->title }}</p>
        <p class="post-body">{{ $post->body }}</p>
    </div>
    @component('components.del-btn')
        @slot('table', 'post')
        @slot('id', $post->id)
    @endcomponent
    <button class="btn edit">
        <a href="{{ url('post/' . $post->id . '/edit') }}">Edit</a>
    </button>
    <button class="btn return">
        <a href="{{ url('post/') }}">Return to List</a>
    </button>

@endsection