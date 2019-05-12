@extends('layouts.my')

@section('content')

<div class="container">
    <h1>Edit</h1>
    <form method="POST" action="{{ url('post/' . $post->id) }}" class="edit-post">
        @csrf
        @method('PUT')
        <input type="text" name="title" value="{{ $post->post }}" required autofocus>
        <textarea type="text" name="body">{{ $post->body }}</textarea>

        <button type="submit" name="submit" class="btn update">Update</button>
    </form>
    <button class="btn return">
        <a href="{{ url('post/') }}">Return to List</a>
    </button>


</div>

@endsection