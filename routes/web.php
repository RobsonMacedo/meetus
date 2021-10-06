<?php

use App\Http\Livewire\Event\Create;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Event\Create as CreateEvent;
use App\Http\Livewire\People\Create as CreatePeople;
use App\Http\Livewire\Event\Show as ShowEvent;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', ShowEvent::class)->middleware(['auth'])->name('show-events');

Route::get('/create-event', CreateEvent::class)->middleware(['auth'])->name('create-event');

Route::get('/create-event/create-people', CreatePeople::class)->middleware(['auth'])->name('create-people');


require __DIR__.'/auth.php';
