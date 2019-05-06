@extends('layouts.my')

@section('content')
<div class="container">
    <form class="word-create" action="{{ url('words') }}" method="POST">
        @csrf
        @method('POST')
        <!-- <label for="word">Word</label> -->
        <input id="word" type="text" name="word" placeholder="Word" required autofocus>

        <!-- <label for="meaning">Meaning</label> -->
        <input type="text" id="meaning" placeholder="Meaning" name="meaning">

        <!-- <label for="example">Example</label> -->
        <textarea type="text" id="example" placeholder="Example" name="example"></textarea>

        <button type="submit" name="submit" class="btn submit">Add</button>

    </form>
</div>

@endsection