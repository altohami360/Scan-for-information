<?php

use App\Http\Controllers\DownloadController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InformationController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;

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

Route::redirect('/', 'home');

Route::middleware(['auth'])->group(function() {

    Route::get('download', [DownloadController::class, 'download'])->name('download');
    
    Route::get('home', [HomeController::class, 'home'])->name('home');
    
    Route::put('profile/{user}', [ProfileController::class, 'update'])->name('profile.update');
    Route::get('profile', [ProfileController::class, 'profile'])->name('profile');

});

Route::get('information/{id}', [InformationController::class, 'show'])->name('information');

require __DIR__ . '/auth.php';
