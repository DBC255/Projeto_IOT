<?php

use App\Livewire\Dashboard\Dashboard;
use Illuminate\Support\Facades\Route;

Route::get('/', Dashboard::class)->name('dashboard');

