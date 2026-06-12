<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/ar');
});

Route::get('/{locale}', function ($locale) {
    if (! in_array($locale, ['ar', 'en'])) {
        abort(404);
    }

    App::setLocale($locale);

    return view('welcome', [
        'locale' => $locale,
        'dir' => $locale === 'ar' ? 'rtl' : 'ltr',
    ]);
})->name('home');