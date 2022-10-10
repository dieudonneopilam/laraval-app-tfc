@extends('layouts.app')
@section('main')
    <div class="login-main">
        <div class="logo-img">
            <img class="image-icone" src="{{ asset('img/snel.png') }}" alt="">
        </div>
        <form action="" method="post">
            @csrf
            <div class="group-form">
                <label class="label-form" for="mail">email</label>
                <input class="input-form" type="email" id="mail" placeholder="ex : dieudonne@gmail.com">
            </div>
            <div class="group-form">
                <label class="label-form" for="password">password</label>
                <input class="input-form" type="password" id="password" placeholder="ex : 12345">
            </div>
            <div class="btn-group">
                <button class="btn">login</button>
            </div>
        </form>
    </div>
@endsection
