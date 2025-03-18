<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session ;

Route::middleware('setLanguage')->group(function (){

    Route::get('/', function () {
        return view('welcome');
    })->name('home');

    Route::get('/privacy-policy', function () {
        return view('privacy-policy');
    })->name('privacy-policy');

    Route::get('/terms-and-conditions', function () {
        return view('terms-condition');
    })->name('terms-and-conditions');

    Route::get('/{lang}', function ($lang) {
        App::setLocale($lang);
        return view('welcome');
    });

    Route::get('setLang/{lang}', function ($lang) {
        Session::put('lang', $lang);
        return redirect()->route('home');
    })->name('setLang');

});
