<?php

use Illuminate\Support\Facades\Route;

Route::middleware(config('ecdocs.middleware'))->group(function () {
    Route::get('docs/api.json', function () {
        return 'In progress';
    })->name('ecdocs.docs.json');

    Route::view('docs/api', 'ecdocs::docs')->name('ecdocs.docs.api');
});
