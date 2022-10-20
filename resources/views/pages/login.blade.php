@extends('layouts.app')
@section('main')
    <div class="login-main">
        <div class="logo-img">
            <img class="image-icone" src="{{ asset('img/snel.png') }}" alt="">
            <p class="login">login</p>
        </div>
        <form action="" method="post">
            @csrf
            <div class="group-form">
                <label class="label-form" for="mail">Mail or username</label>
                <input class="input-form" type="email" id="mail" placeholder="dieudonne@gmail.com">
            </div>
            <div class="group-form">
                <label class="label-form" for="password">password</label>
                <input class="input-form" type="password" id="password" placeholder="*********">
            </div>
            <div class="btn-group btn">
                <button class="btn">login</button>
            </div>
        </form>
    </div>
@endsection
