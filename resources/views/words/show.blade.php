@extends('layouts.my')

@section('content')

<div class="container">
    <div class="show-word">
        <p class="word">{{ $word->word }}</p>
        <p class="meaning">{{ $word->meaning }}</p>
        <p class="example">{{ $word->example }}</p>
    </div>
    <button class="btn return">
        <a href="{{ url('words/') }}">Return to List</a>
    </btn>
</button>

@endsection