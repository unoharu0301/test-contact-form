<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactFormController;

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


/*Route::get('/', [ContactFormController::class, 'index']);*/
Route::group(['middleware' => ['auth']], function () {
    Route::get('/', [ContactFormController::class, 'index'])->name('login');
    Route::resource('/articles', ArticleController::class);
});
Route::post('/contacts/confirm', [ContactFormController::class,'confirm']);
Route::post('/contacts', [ContactFormController::class, 'store']);
/*Route::post('/', [ContactFormController::class, 'back']);*/
/*Route::get('/login', [ContactFormController::class, 'login']);
Route::post('/login', [ContactFormController::class, 'login']);
Route::get('/register', [ContactFormController::class, 'register']);
Route::post('/register', [ContactFormController::class, 'register']);
*/