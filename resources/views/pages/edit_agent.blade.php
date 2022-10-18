@extends('layouts.app')
@section('main')
    <div class="add-agent-main">
        <div class="div-img">
            <a href="{{ route('agents') }}"><img class="image-icone" src="{{ asset('img/retour.png') }}" alt=""></a>
            <h2 class="title">Modifier un agent</h2>
        </div>
        <form action="">
            <div class="group-form">
                <label class="label-form" for="name">name</label>
                <input type="text" class="input-form" id="name">
            </div>
            <div class="group-form">
                <label class="label-form" for="mail">mail</label>
                <input type="text" class="input-form" id="mail">
            </div>
            <div class="group-form">
                <select class="input-form-check" name="sexe" id="">
                    <option value="m">masculin</option>
                    <option value="f">feminin</option>
                </select>

            </div>
            <div class="group-form">
                <label class="label-form" for="password">phone</label>
                <input type="text" class="input-form" id="password">
            </div>
            <div class="group-form">
                <label class="label-form" for="password">.</label>
                <input type="file" class="input-form" id="password">
            </div>
            <div class="group-form">
                <label class="label-form" for="password">password</label>
                <input type="password" class="input-form" id="password">
            </div>
            <div class="group-form">
                <label class="label-form" for="password">confirm</label>
                <input type="password" class="input-form" id="password">
            </div>
            <div class="group-form-btn">
                <button class="btn-submit" type="submit">enregistrer</button>
            </div>
        </form>
    </div>
@endsection
