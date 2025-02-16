<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ImportContactController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('contacts', ContactController::class);

Route::post('/contacts/import-xml', [ImportContactController::class, 'importXml'])->name('contacts.import.xml');

