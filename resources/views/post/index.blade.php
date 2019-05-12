@extends('layouts.my')

@section('content')

<div class="container">
    <div class="inline-container">
        <h1>blog list</h1>
        <a href="{{ url('post/create') }}">Add New post</a>
    </div>
    <ul class="post-ul">
        @forelse ($posts as $post)
            <li class="post-list"><a href="{{ url('post/' . $post->id) }}" class="post-link">{{ $post->title }}</a></li>
        @empty
            <li>No Post yet</li>
        @endforelse
    </ul>
</div>


@endsection