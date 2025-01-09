<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TicketTypeController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\ProjectController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('landing_page');
});

Route::prefix('ticket_type')->name('ticket_types.')->group(function () {
    Route::get('/index', [TicketTypeController::class, 'index'])->name('index');
    Route::get('/create', [TicketTypeController::class, 'create'])->name('create');
    Route::post('/store', [TicketTypeController::class, 'store'])->name('store');
    Route::get('/edit/{id}', [TicketTypeController::class, 'edit'])->name('edit');
});

Route::prefix('ticket')->name('tickets.')->group(function () {
    Route::get('/index', [TicketController::class, 'index'])->name('index');
    Route::get('/create', [TicketController::class, 'create'])->name('create');
    Route::post('/store', [TicketController::class, 'store'])->name('store');
    Route::get('/edit/{id}', [TicketController::class, 'edit'])->name('edit');
    Route::post('/update', [TicketController::class, 'update'])->name('update');

});

Route::prefix('project')->name('projects.')->group(function () {
    Route::get('index', [ProjectController::class, 'index'])->name('index');
});
