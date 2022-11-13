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

// Route::resource('photos', PhotoController::class)->only([
//     'index', 'show'
// ]);
 
Route::resource('photos', PhotoController::class)->except([
    'create', 'store', 'update', 'destroy'
]);
//

Route::get('/', function () {
    return view('welcome');
});

//route apropos de nous 
Route::get('/aproposdenous', function(){
    return view('/template/aproposdenous');
});

//route nos missions
Route::get('/nosmissions/cultures', function(){
    return view('/template/nosmissions/cultures');
});

Route::get('/nosmissions/economies', function(){
    return view('/template/nosmissions/economies');
});

Route::get('/nosmissions/educations', function(){
    return view('/template/nosmissions/educations');
});

Route::get('/nosmissions/entrepreneuriats', function(){
    return view('/template/nosmissions/entrepreneuriats');
});

Route::get('/nosmissions/handicapes', function(){
    return view('/template/nosmissions/handicapes');
});

Route::get('/nosmissions/maladies', function(){
    return view('/template/nosmissions/maladies');
});

Route::get('/nosmissions/orphelins', function(){
    return view('/template/nosmissions/orphelins');
});

Route::get('/nosmissions/santes', function(){
    return view('/template/nosmissions/santes');
});

Route::get('/nosmissions/sports', function(){
    return view('/template/nosmissions/sports');
});

Route::get('/nosmissions/veuves', function(){
    return view('/template/nosmissions/veuves');
});

//route comment nous aider
Route::get('/aide/commentnousaider', function(){
    return view('/template/aide/commentnousaider');
});

//route faire un don
Route::get('/don/faireundon',[DonateController::class, 'create']);
Route::post('/don/faireundon',[DonateController::class, 'store'])->name('dons.store');

//route newsletter
Route::get('/newsletter',[NewsletterController::class, 'create']);
Route::post('/newsletter',[NewsletterController::class, 'store'])->name('newsletters.store');

//route story
Route::get('/stories', [StoryController::class, 'index']);
Route::get('/stories/create', [StoryController::class, 'create']);
Route::post('/stories', [StoryController::class, 'store'])->name('stories.store');

//route adhesion
Route::get('/adhesion', [MemberController::class, 'create']);
Route::post('/adhesion', [MemberController::class, 'store'])->name('adhesion.store');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
