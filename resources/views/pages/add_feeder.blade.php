@extends('layouts.app')
@section('main')
    <div class="add-agent-main">
        <div class="div-img">
            <a href="{{ route('feeders') }}"><img class="image-icone" src="{{ asset('img/retour.png') }}" alt=""></a>
            <h2 class="title">ajouter un feeder</h2>
        </div>
        <form action="">
            <div class="group-form">
                <label class="label-form" for="name">name</label>
                <input type="text" class="input-form" id="name" name="name">
            </div>
            <div class="group-form">
                <label class="label-form" for="ip">ip adress</label>
                <input type="text" class="input-form" name="ip" id="ip">
            </div>
            <div class="group-form">
                <label class="label-form" for="photo">.</label>
                <input type="file" class="input-form" id="photo">
            </div>
            <div class="group-form-btn">
                <button class="btn-submit" type="submit">enregistrer</button>
            </div>
        </form>
    </div>
@endsection
