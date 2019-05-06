@extends('layouts.my')

@section('content')
<div class="container">
    <div class="inline-container">
        <h1>Words List</h1>
        <a href="{{ url('words/create') }}">Add New Word</a>
    </div>
    <ul>
        @forelse ($words as $word)
            <li><a href="{{ url('words/' . $word->id) }}">{{ $word->word }}</a></li>
        @empty
            <li>No word yet</li>
        @endforelse
    </ul>


</div>
@endsection