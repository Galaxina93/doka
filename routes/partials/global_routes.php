<?php

use App\Models\PageVisit;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Request;


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

// Service Subpages
Route::get('/leistungen/renovierung', function () {
    return view('frontend.pages.services.renovierung');
});
Route::get('/leistungen/boden-und-fugenarbeiten', function () {
    return view('frontend.pages.services.boden_und_fugenarbeiten');
});
Route::get('/leistungen/hausmeisterservice', function () {
    return view('frontend.pages.services.hausmeisterservice');
});
Route::get('/leistungen/reinigung', function () {
    return view('frontend.pages.services.reinigung');
});
Route::get('/leistungen/winterdienst', function () {
    return view('frontend.pages.services.winterdienst');
});
Route::get('/leistungen/haushaltsaufloesung', function () {
    return view('frontend.pages.services.haushaltsaufloesung');
});


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
