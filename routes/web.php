<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('client',[ClientController::class,'index'])->name('client');
Route::get('client/create',[ClientController::class,'create'])->name('client.create');
Route::post('client/store',[ClientController::class,'store'])->name('client.store');