@extends('layouts.my')

@section('content')

<div class="container">
    <div class="show-word">
        <p class="word">{{ $word->word }}</p>
        <p class="meaning">{{ $word->meaning }}</p>
        <p class="example">{{ $word->example }}</p>
    </div>
    @component('components.del-btn')
        @slot('table', 'words')
        @slot('id', $word->id)
    @endcomponent
    <button class="btn edit">
        <a href="{{ url('words/' . $word->id . '/edit') }}">Edit</a>
    </button>
    <button class="btn return">
        <a href="{{ url('words/') }}">Return to List</a>
    </button>

@endsection