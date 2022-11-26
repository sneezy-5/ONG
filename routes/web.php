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
use App\Http\Controllers\ong\ContactController;
use App\Http\Controllers\ong\DonateController;
use App\Http\Controllers\ong\EventController;
use App\Http\Controllers\ong\MemberController;
use App\Http\Controllers\ong\NewsletterController;
use App\Http\Controllers\ong\StoryController;
use App\Http\Controllers\ong\welcomeController;
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
 
//

Route::get('/', [welcomeController::class, 'index'])->name('/');
//route A propos de nous 
Route::get('/aproposdenous', function(){
    return view('template.aproposdenous');
});

////route du menu deroulant nos mission
//route cultures
Route::get('/nosmissions/cultures', function(){
    return view('template.nosmissions.cultures');
});

// route economies
Route::get('/nosmissions/economies', function(){
    return view('template.nosmissions.economies');
});

// route educations
Route::get('/nosmissions/educations', function(){
    return view('template.nosmissions.educations');
});

// route santes
Route::get('/nosmissions/santes', function(){
    return view('template.nosmissions.santes');
});

// route educations
Route::get('/nosmissions/educations', function(){
    return view('template.nosmissions.educations');
});

// route educations
Route::get('/nosmissions/educations', function(){
    return view('template.nosmissions.educations');
});

// route sociales
Route::get('nosmissions/sociales', function(){
    return view('template.nosmissions.sociales');
});

// route sports
Route::get('/nosmissions/sports', function(){
    return view('template.nosmissions.sports');
});

//// Routes du menu deroulant comment nous aider ?

// route adhesion
Route::resource('commentnousaider/adhesion', MemberController::class)->only([
    'create', 'store'
]);

// route faire un don

Route::resource('/commentnousaider/faireundon', DonateController::class)->only([
    'create', 'store'
]);

// route story (actualité)

Route::resource('/story', StoryController::class)->only([
    'index', 'show'
]);

// route evenement (activité)
Route::resource('/events', EventController::class)->only([
    'index', 'show'
]);

//route newsletter
Route::resource('/newsletter', NewsletterController::class)->only([
    'create', 'store'
]);
//route contact
Route::resource('/contact', ContactController::class)->only([
    'index','create', 'store'
]);

Route::get('/donateur', function () {
    return view('espace_donateur.donateur');
})->middleware(['auth'])->name('donateur');

require __DIR__.'/auth.php';
