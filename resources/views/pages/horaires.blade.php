@extends('layouts.app')
@section('main')
    <div class="m-programme">
        <header class="header-programmes">
            <div class="div-retour-add-programme">
                <a href="{{ route('home') }}"><img class="image-icone" src="{{ asset('img/retour.png') }}" alt=""></a>
                <a href="{{ route('add-horaire') }}"><img class="image-icone" src="{{ asset('img/user_add.png') }}" alt=""></a>
            </div>
            <h2>Feeder title</h2>
        </header>
        <div class="container">
            <table class="table">
                <tr>
                    <th>N°</th>
                    <th>Hdebut</th>
                    <th>Hfin</th>
                    <th>type</th>
                    <th>action</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>1:00</td>
                    <td>05:00</td>
                    <td>coupure</td>
                    <td class="action">
                        <a href="{{ route('edit-horaire') }}"><img class="image-icone" src="{{ asset('img/edit1.png') }}" alt=""></a>
                        <a href=""><img class="image-icone" src="{{ asset('img/delete.png') }}" alt=""></a>
                    </td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>05:00</td>
                    <td>05:00</td>
                    <td>coupure</td>
                    <td class="action">
                        <a href=""><img class="image-icone" src="{{ asset('img/edit1.png') }}" alt=""></a>
                        <a href=""><img class="image-icone" src="{{ asset('img/delete.png') }}" alt=""></a>
                    </td>
                </tr>
            </table>
        </div>
    </div>
@endsection
