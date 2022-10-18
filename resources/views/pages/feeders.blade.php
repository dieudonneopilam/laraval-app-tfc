@extends('layouts.app')
@section('main')
    <div class="m-agent">
        <header class="header-agents">
            <div class="div-retour-add-agent">
                <a href="{{ route('home') }}"><img class="image-icone" src="{{ asset('img/retour.png') }}" alt=""></a>
                <a href="{{ route('add-feeder') }}"><img class="image-icone" src="{{ asset('img/user_add.png') }}" alt=""></a>
            </div>
            <form action="" method="post">
                <div class="group-form">
                    <input class="input-search" type="search" placeholder="chercher un feeder">
                </div>
            </form>
        </header>
        <div class="container">
            <div class="card-agent">
                <div class="div-img-agent div-img-feeder">
                    <img src="{{ asset('img/gustave.jpg') }}" alt="">
                </div>
                <div class="title-agent">
                    <h1 class="text-name">feederA</h1>
                    <div class="f-btn">
                        <p class="text-feeder-name">Dieudonné opilam</p>
                        <a href=""><img class="option-icone" src="{{ asset('img/share.png') }}" alt=""></a>
                    </div>
                </div>
                <div class="options">
                    <ul>
                        <li><a href="{{ route('edit-feeder') }}"><img class="image-icone" src="{{ asset('img/az.png') }}" alt=""></a></li>
                        <li><a href=""><img class="image-icone" src="{{ asset('img/delete.png') }}" alt=""></a></li>
                        <li><a href=""><img class="image-icone" src="{{ asset('img/view.png') }}" alt=""></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
