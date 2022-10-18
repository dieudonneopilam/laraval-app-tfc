@extends('layouts.app')
@section('main')
    <div class="container-gestion">
        <a href="{{ route('agents') }}" class="gestion-agent card">
            <img class="person" src="{{ asset('img/person.png') }}" alt="">
            <p class="title">Gestion des agent</p>
        </a>
        <a href="{{ route('feeders') }}" class="gestion-feeder card">
            <img class="person" src="{{ asset('img/homee.png') }}" alt="">
            <p class="title">Gestion des feeder</p>
        </a>
        <a href="#"class="gestion-rapport card">
            <img class="person" src="{{ asset('img/dossier.png') }}" alt="">
            <p class="title">Gestion des rapports</p>
        </a>
        <a href="{{ route('horaires') }}"class="gestion-horaire card">
            <img class="person" src="{{ asset('img/dossier.png') }}" alt="">
            <p class="title">Gestion Horaire</p>
        </a>
        <a href="{{ route('programmes') }}"class="gestion-programme card">
            <img class="person" src="{{ asset('img/dossier.png') }}" alt="">
            <p class="title">Gestion programmes</p>
        </a>
    </div>
@endsection
