<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


Route::get('/', function () { return view('home'); });
Route::get('/register', function () { return view('register'); });

Route::get('/login', function () { return view('login'); })->name('login');
Route::post('/login', function (Request $request) {
    $credentials = $request->only('email', 'password');
    if (Auth::attempt($credentials)) {
        return redirect('/panel');
    }
    return back()->with('error', 'Credenciales incorrectas');
});
Route::post('/logout', function () {
    Auth::logout();
    return redirect('/');
})->name('logout');



Route::middleware(['auth'])->group(function () {
    
    Route::get('/panel', function () { return view('panel-usuario'); });

    Route::middleware(['age'])->group(function () {
        Route::get('/casino', function () { return view('casino'); });
    });

    Route::middleware(['admin'])->group(function () {
        Route::get('/admin', function () { return view('panel-admin'); });
    });

});