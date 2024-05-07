<?php

use App\Http\Controllers\Admin;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Route;

Route::get('/i', [Admin::class , 'index'])->name('index');
