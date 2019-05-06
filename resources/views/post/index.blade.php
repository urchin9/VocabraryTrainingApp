@extends('layouts.my')

@section('content')

<div class="container">
    <h1>blog list</h1>
    <ul>
        @forelse ($posts as $post)
            <li>{{ $post->title }}</li>
        @empty
            <p>No Post Yet</p>
        @endforelse
    </ul>
</div>


@endsection