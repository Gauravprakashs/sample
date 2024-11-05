<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SumController;

Route::get('/', function () {
    return view('show');
});

Route::get('/sum', [SumController::class, 'showForm'])->name('sum.form');

Route::post('/sum',[SumController::class, 'calculateSum'])->name('sum.calculate');


