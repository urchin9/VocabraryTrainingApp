@extends('layouts.my')

@section('content')

<div class="container">
    <h1>blog list</h1>
    <ul>
        @forelse ($posts as $post)
            <li><a href="{{ url('post/' . $post->id) }}">{{ $post->title }}</a></li>
        @empty
            <li>No Post yet</li>
        @endforelse
    </ul>
</div>


@endsection