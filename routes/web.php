<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\InformationController;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

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
    return redirect('/dashboard');
});

Route::get('information/{id}', [InformationController::class, 'show'])->name('information');


Route::get('download', function () {
    QrCode::margin(1)->format('png')->size(200)->generate(route('information', auth()->user()->id), public_path('uploads\images\qrcode.png'));
    return response()->download(public_path('uploads\images\qrcode.png'));
})->name('download');

Route::get('/dashboard', [HomeController::class, 'home'])->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
