@extends('layouts.my')

@section('content')
<div class="container">
    <h3>MyPlan</h3>
    <div class="sub-container">
        <div class="num">
            <p>I</p>
        </div>
        <div class="mydate">
            <p class="aim">IELTS</p>
            <p class="p-day">xxxx/xx/xx</p>
        </div>
        <div class="isDone">
            <i class="far fa-square"></i>
        </div>
    </div>
    <div class="sub-container">
        <div class="num">
            <p>Ⅱ</p>
        </div>
        <div class="mydate">
            <p class="aim">JobOffer</p>
            <p class="p-day">xxxx/xx/xx</p>
        </div>
        <div class="isDone">
            <i class="far fa-square"></i>
        </div>
    </div>
    <div class="sub-container">
        <div class="num">
            <p>Ⅲ</p>
        </div>
        <div class="mydate">
            <p class="aim">ApplyForVISA</p>
            <p class="p-day">xxxx/xx/xx</p>
        </div>
        <div class="isDone">
            <i class="far fa-square"></i>
        </div>
    </div>
    <div class="sub-container">
        <div class="num">
            <i class="fab fa-font-awesome-flag"></i>
        </div>
        <div class="mydate">
            <p class="aim">LeaveJAPAN</p>
            <p class="p-day">xxxx/xx/xx</p>
        </div>
    </div>
</div>
@endsection
