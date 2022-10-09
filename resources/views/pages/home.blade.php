@extends('layouts.app')
@section('main')
    <div class="container-gestion">
        <div class="gestion-agent card">
            <img class="person" src="{{ asset('img/person.png') }}" alt="">
            <p class="title">Gestion des agent</p>
        </div>
        <div class="gestion-feeder card">
            <img class="person" src="{{ asset('img/homee.png') }}" alt="">
            <p class="title">Gestion des feeder</p>
        </div>
        <div class="gestion-rapport card">
            <img class="person" src="{{ asset('img/dossier.png') }}" alt="">
            <p class="title">Gestion des rapports</p>
        </div>
    </div>
@endsection
