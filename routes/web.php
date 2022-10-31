<?php

use App\Http\Controllers\AproposController;
use App\Http\Controllers\CommentNousAiderController;
use App\Http\Controllers\CultureController;
use App\Http\Controllers\EconomieController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\EntrepreneuriatController;
use App\Http\Controllers\FaireUnDonController;
use App\Http\Controllers\HandicapeController;
use App\Http\Controllers\MaladieController;
use App\Http\Controllers\OrphelinController;
use App\Http\Controllers\SanteController;
use App\Http\Controllers\SportController;
use App\Http\Controllers\VeuveController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/nosmissions/cultures', [CultureController::class, 'index']);
Route::get('/nosmissions/economies', [EconomieController::class, 'index']);
Route::get('/nosmissions/educations', [EducationController::class, 'index']);
Route::get('/nosmissions/entrepreneuriats', [EntrepreneuriatController::class, 'index']);
Route::get('/nosmissions/handicapes', [HandicapeController::class, 'index']);
Route::get('/nosmissions/maladies', [MaladieController::class, 'index']);
Route::get('/nosmissions/orphelins', [OrphelinController::class, 'index']);
Route::get('/nosmissions/santes', [SanteController::class, 'index']);
Route::get('/nosmissions/sports', [SportController::class, 'index']);
Route::get('/nosmissions/veuves', [VeuveController::class, 'index']);
Route::get('/don/faireundon', [FaireUnDonController::class, 'index']);
Route::get('/aide/commentnousaider', [CommentNousAiderController::class, 'index']);
Route::get('/aproposdenous', [AproposController::class, 'index']);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
