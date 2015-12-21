<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('quotes')->with('quotes', \App\Quote::all());
});

Route::post('/', function() {
    $quote = new \App\Quote(\Input::all());
    $quote->save();
    return redirect('/');
});
