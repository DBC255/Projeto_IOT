<?php

use App\Livewire\Ambiente\AmbienteCreate;
use App\Livewire\Ambiente\AmbienteEdit;
use App\Livewire\Ambiente\AmbienteIndex;
use App\Livewire\Dashboard\Dashboard;
use App\Livewire\Sensor\SensorCreate;
use App\Livewire\Sensor\SensorEdit;
use App\Livewire\Sensor\SensorIndex;
use Illuminate\Support\Facades\Route;

Route::get('/', Dashboard::class)->name('dashboard');
Route::get('/Ambiente', AmbienteIndex::class)->name('ambiente.Index');
Route::get('/Ambiente/create', AmbienteCreate::class)->name('ambiente.create');
Route::get('/Ambiente/edit/{id}', AmbienteEdit::class)->name('ambiente.edit');
Route::get('/sensor', SensorIndex::class)->name('sensor.Index');
Route::get('/sensor/create', SensorCreate::class)->name('sensor.create');
Route::get('/sensor/edit/{id}', SensorEdit::class)->name('sensor.edit');