@extends('layouts.app')
@section('main')
    <div class="m-agent">
        <header class="header-agents">
            <div class="div-retour-add-agent">
                <a href="{{ route('home') }}"><img class="image-icone" src="{{ asset('img/retour.png') }}" alt=""></a>
                <a href="{{ route('add-agent') }}"><img class="image-icone" src="{{ asset('img/user_add.png') }}" alt=""></a>
            </div>
            <form action="" method="post">
                <div class="group-form">
                    <input class="input-search" type="search" placeholder="chercher un agent">
                </div>
            </form>
        </header>
        <div class="container">
            <div class="card-agent">
                <div class="div-img-agent">
                    <img src="{{ asset('img/gustave.jpg') }}" alt="">
                </div>
                <div class="title-agent">
                    <h1 class="text-name">Dieudonné opilam</h1>
                    <p class="mail-agent">dieudonneopilam2@gmail.com</p>
                    <h2 class="name-feeder">Feeder Name</h2>
                </div>
                <img class="option-icone image-icone" src="{{ asset('img/menup.png') }}" alt="">
            </div>
        </div>
    </div>
@endsection
