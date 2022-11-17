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
use App\Http\Controllers\ong\DonateController;
use App\Http\Controllers\ong\MemberController;
use App\Http\Controllers\ong\NewsletterController;
use App\Http\Controllers\ong\StoryController;
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

// Route::resource('test', PhotoController::class)->only([
//     'index', 'show'
// ]);
 
// Route::resource('test', PhotoController::class)->except([
//     'create', 'store', 'update', 'destroy'
// ]);
//

Route::get('/', function () {
    return view('welcome');
});

//route apropos de nous 
Route::get('/aproposdenous', function(){
    return view('/template/aproposdenous');
});

////debut des routes du menu deroulant nos missions

// route culture
Route::get('/nosmissions/cultures', function(){
    return view('/template/nosmissions/cultures');
});
// route economie
Route::get('/nosmissions/economies', function(){
    return view('/template/nosmissions/economies');
});
// route education
Route::get('/nosmissions/educations', function(){
    return view('/template/nosmissions/educations');
});
// route social
Route::get('/nosmissions/social', function(){
    return view('/template/nosmissions/social');
});
//route sante
Route::get('/nosmissions/santes', function(){
    return view('/template/nosmissions/santes');
});

// Route sport 
Route::get('/nosmissions/sports', function(){
    return view('/template/nosmissions/sports');
});
//// fin des routes du menu deroulant de nos missions


////debut des routes du menu deroulant comment nous aider ?

//route faire un don
Route::resource('faireundon', DonateController::class)->except([
    'create', 'store']);

//route adhesion
Route::resource('adhesion', MemberController::class)->except([
    'create', 'store']);

//// fin des routes du menu deroulant comment nous aider ?
//route newsletter
Route::resource('newsletter', NewsletterController::class)->except([
    'create', 'store']);

//route story
Route::resource('stories', StoryController::class)->except([
    'index','create', 'store']);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
