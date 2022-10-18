<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
})->name('home');
//auth
Route::get('/login', function () {
    return view('pages.login');
})->name('login');
//agent
Route::get('/agents', function () {
    return view('pages.agents');
})->name('agents');
Route::get('/add-agent', function () {
    return view('pages.add_agent');
})->name('add-agent');
Route::get('/edit-agent', function () {
    return view('pages.edit_agent');
})->name('edit-agent');
//feeder
Route::get('/feeders', function () {
    return view('pages.feeders');
})->name('feeders');
Route::get('/add-feeder', function () {
    return view('pages.add_feeder');
})->name('add-feeder');
Route::get('/edit-feeder', function () {
    return view('pages.edit_feeder');
})->name('edit-feeder');
Route::get('/programmes', function () {
    return view('pages.programes');
})->name('programmes');
Route::get('/add-programme', function () {
    return view('pages.add_programme');
})->name('add-programme');

Route::get('/edit-programme', function () {
    return view('pages.edit_programme');
})->name('edit-programme');

Route::get('/add-horaire', function () {
    return view('pages.add_horaire');
})->name('add-horaire');
Route::get('/horaires', function () {
    return view('pages.horaires');
})->name('horaires');
Route::get('/add-horaire', function () {
    return view('pages.add_horaire');
})->name('add-horaire');
Route::get('/edit-horaire', function () {
    return view('pages.add_horaire');
})->name('edit-horaire');
