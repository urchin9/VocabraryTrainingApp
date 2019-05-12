@extends('layouts.my')

@section('content')

<div class="container">
    <h1>Create post</h1>
    <form action="{{ url('post/') }}" method="POST" class="post-create">
    @csrf
    @method('POST')
    <input type="text" name="title" placeholder="title" autofocus>
    <textarea name="body" placeholder="body"></textarea>
    <button type="submit" class="btn post">Create</button>
    <button class="btn return">
        <a href="{{ url('post/') }}">Return to List</a>
    </button>
    </form>
</div>

@endsection