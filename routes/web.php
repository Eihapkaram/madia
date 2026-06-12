<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('home', ['locale' => 'ar']);
});

Route::get('/{locale}', function ($locale) {

    $supportedLocales = ['ar', 'en'];

    if (!in_array($locale, $supportedLocales)) {
        abort(404);
    }

    App::setLocale($locale);

    return view('welcome', [
        'locale' => $locale,
        'dir' => $locale === 'ar' ? 'rtl' : 'ltr',
    ]);

})->where('locale', 'ar|en')->name('home');
