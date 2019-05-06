@extends('layouts.my')

@section('content')

<div class="container">
    <form method="POST" action="{{ url('words/' . $word->id) }}" class="edit-word">
        @csrf
        @method('PUT')
        <input type="text" name="word" value="{{ $word->word }}" required autofocus>
        <input type="text" name="meaning" value="{{ $word->meaning }}">
        <textarea type="text" name="example">{{ $word->example }}</textarea>

        <button type="submit" name="submit" class="btn update">Update</button>
    </form>
    <button class="btn return">
        <a href="{{ url('words/') }}">Return to List</a>
    </button>


</div>

@endsection