<?php

use App\Http\Controllers\HomeController;
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

Route::get('my-info/{id}', function(){
    return 1;
})->name('my-info');


Route::get('download', function () {
    QrCode::margin(0)->format('svg')->size(50)->generate('hi');
    return response()->download(public_path('uploads\images\qrcode.svg'));
})->name('download');

Route::get('/dashboard', [HomeController::class, 'home'])->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
