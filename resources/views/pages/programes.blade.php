@extends('layouts.app')
@section('main')
    <div class="m-programme">
        <header class="header-programmes">
            <div class="div-retour-add-programme">
                <a href="{{ route('home') }}"><img class="image-icone" src="{{ asset('img/retour.png') }}" alt=""></a>
                <a href="{{ route('add-programme') }}"><img class="image-icone" src="{{ asset('img/user_add.png') }}" alt=""></a>
            </div>
            <form action="" method="post">
                <div class="group-form">
                    <input class="input-search" type="search" placeholder="chercher un feeder">
                </div>
            </form>
        </header>
        <div class="container">
            <table class="table">
                <tr>
                    <th>N°</th>
                    <th>Feeder</th>
                    <th>Agent</th>
                    <th>photo</th>
                    <th>action</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>FeederA</td>
                    <td>Dieudonné</td>
                    <td><img class="image" src="{{ asset('img/profil.JPG') }}" alt=""></td>
                    <td class="action">
                        <a href="{{ route('edit-programme') }}"><img class="image-icone" src="{{ asset('img/edit1.png') }}" alt=""></a>
                        <a href=""><img class="image-icone" src="{{ asset('img/delete.png') }}" alt=""></a>
                    </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>FeederA</td>
                    <td>Dieudonné</td>
                    <td><img class="image" src="{{ asset('img/profil.JPG') }}" alt=""></td>
                    <td class="action">
                        <a href="{{ route('edit-programme') }}"><img class="image-icone" src="{{ asset('img/edit1.png') }}" alt=""></a>
                        <a href=""><img class="image-icone" src="{{ asset('img/delete.png') }}" alt=""></a>
                    </td>
                </tr>
            </table>
        </div>
    </div>
@endsection
