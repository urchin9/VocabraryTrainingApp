@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">Messanger</div>
                    <chat-app :user="{{ auth()->user() }}"></chat-app>
                <div class="card-body home-body" id="app">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
