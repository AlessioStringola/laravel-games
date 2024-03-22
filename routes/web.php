<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GameController;
use App\Http\Controllers\PublicController;

Route::get('/',[PublicController::class,'home'])->name('home');
Route::get('/game/create',[GameController::class,'create'])->name('game.create');
Route::post('/game/store',[GameController::class,'store'])->name('game.store');
Route::get('/games',[GameController::class,'index'])->name('game.index');
Route::get('/game/detail/{game}',[GameController::class,'show'])->name('game.show');
Route::get('/game/edit/{game}',[GameController::class,'edit'])->name('game.edit');
Route::put('/game/update/{game}',[GameController::class,'update'])->name('game.update');
Route::delete('/game/destroy/{game}',[GameController::class,'destroy'])->name('game.destroy');
Route::get('/game/filter/{category}',[GameController::class,'filterbycategory'])->name('game.filterbycategory');
Route::get('/detail',[PublicController::class,'detail'])->name('detail');
Route::get('/contact-us',[PublicController::class,'formemail'])->name('formemail');
Route::post('/contact-us/sendemail',[PublicController::class,'sendEmail'])->name('send.email');
