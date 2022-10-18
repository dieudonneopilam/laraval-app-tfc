@extends('layouts.app')
@section('main')
    <div class="add-agent-main">
        <div class="div-img">
            <a href="{{ route('programmes') }}"><img class="image-icone" src="{{ asset('img/retour.png') }}" alt=""></a>
            <h2 class="title">nouveelle affectation</h2>
        </div>
        <form action="">
            <div class="group-form">
                <label class="label-form" for="name">Selectionner un agent</label>
                <select class="input-form" name="" id="">
                    <option value="">Dieudonné</option>
                </select>
            </div>
            <div class="group-form">
                <label class="label-form" for="name">Selectionner le feeder</label>
                <select class="input-form" name="" id="">
                    <option value="">FeederB</option>
                </select>
            </div>
            <div class="group-form-btn">
                <button class="btn-submit" type="submit">enregistrer</button>
            </div>
        </form>
    </div>
@endsection
