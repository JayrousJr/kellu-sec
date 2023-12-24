<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\Filament\LogoutController;
use App\Http\Controllers\ProcessController;

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
    return view('/site/index');
})->name('home');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('about', [PagesController::class, 'about'])->name('about');
Route::get('contact', [PagesController::class, 'contact'])->name('contact');
Route::get('staff', [PagesController::class, 'staff'])->name('staff');
Route::get('news', [PagesController::class, 'news'])->name('news');
Route::get('gallery', [PagesController::class, 'gallery'])->name('gallery');
Route::post('processing', [ProcessController::class, 'send_message'])->name('send');

Route::post('/auth/logout', [LogoutController::class, 'logout'])->name('filament.admin.auth.logout');
