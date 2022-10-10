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
                    <div class="f-btn">
                        <p class="text-feeder-name">feederA deka rer de</p>
                        <a href=""><img class="option-icone" src="{{ asset('img/share.png') }}" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="card-agent">
                <div class="div-img-agent">
                    <img src="{{ asset('img/gustave.jpg') }}" alt="">
                </div>
                <div class="title-agent">
                    <h1 class="text-name">Dieudonné opilam</h1>
                    <div class="f-btn">
                        <p class="text-feeder-name">feederA deka rer de</p>
                        <a href=""><img class="option-icone" src="{{ asset('img/share.png') }}" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="card-agent">
                <div class="div-img-agent">
                    <img src="{{ asset('img/gustave.jpg') }}" alt="">
                </div>
                <div class="title-agent">
                    <h1 class="text-name">Dieudonné opilam</h1>
                    <div class="f-btn">
                        <p class="text-feeder-name">feederA deka rer de</p>
                        <a href=""><img class="option-icone" src="{{ asset('img/share.png') }}" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="card-agent">
                <div class="div-img-agent">
                    <img src="{{ asset('img/gustave.jpg') }}" alt="">
                </div>
                <div class="title-agent">
                    <h1 class="text-name">Dieudonné opilam</h1>
                    <div class="f-btn">
                        <p class="text-feeder-name">feederA deka rer de</p>
                        <a href=""><img class="option-icone" src="{{ asset('img/share.png') }}" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="card-agent">
                <div class="div-img-agent">
                    <img src="{{ asset('img/gustave.jpg') }}" alt="">
                </div>
                <div class="title-agent">
                    <h1 class="text-name">Dieudonné opilam</h1>
                    <div class="f-btn">
                        <p class="text-feeder-name">feederA deka rer de</p>
                        <a href=""><img class="option-icone" src="{{ asset('img/share.png') }}" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
