@extends('layouts.my')

@section('content')
<div class="container">
    <form class="word-create" action="{{ url('words') }}" method="POST">
        @csrf
        @method('POST')
        <!-- <label for="word">Word</label> -->
        <input id="word" type="text" name="word" placeholder="Word" required autofocus autocomplete="off">

        <!-- <label for="meaning">Meaning</label> -->
        <input type="text" id="meaning" placeholder="Meaning" name="meaning" required autocomplete="off">

        <!-- <label for="example">Example</label> -->
        <textarea type="text" id="example" placeholder="Example" name="example" autocomplete="off"></textarea>

        <button type="submit" name="submit" class="btn submit">Add</button>
        <button class="btn return">
            <a href="{{ url('words/') }}">Return to List</a>
        </button>

    </form>
</div>

@endsection