<?php

use App\Models\PageVisit;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Request;

Route::get('/', function () {
    return view('frontend/pages/welcome');
});
Route::get('/application', function () {
    return view('frontend/pages/application');
});

Route::get('/impressum', function () {
    return view('frontend/pages/impressum');
});
Route::get('/datenschutz', function () {
    return view('frontend/pages/privacy');
});
Route::get('/datenschutzerklaerung', function () {
    return view('frontend/pages/privacy');
});


Route::get('/login', function () {
    return view('global/pages/auth/login');
})->middleware('guest:' . implode(',', array_keys(config('auth.guards'))))->name('login');

Route::get('/forgot-password', function () {
    return view('global/pages/password/forgot-password');
})->name('forgot-password');


Route::get('/', function () {
    $alreadyVisited = PageVisit::where('page', 'home')
        ->where('ip_address', Request::ip())
        ->where('created_at', '>=', now()->subHour())
        ->exists();

    if (!$alreadyVisited) {
        PageVisit::create([
            'page' => 'home',
            'ip_address' => Request::ip(),
        ]);
    }

    return view('frontend.pages.welcome');
});
