<?php

use App\Livewire\Payment;
use App\Livewire\BoatSelection;
use App\Livewire\AddOnSelection;
use App\Livewire\RouteSelection;
use Illuminate\Support\Facades\Route;


Route::get('/',RouteSelection::class)->name('route-selection');
Route::get('boat-selection',BoatSelection::class)->name('boat-selection');
Route::get('add-on-selection',AddOnSelection::class)->name('add-on-selection');
Route::get('payment',Payment::class)->name('payment');

