<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\HeroController;
use App\Http\Controllers\LoveToDoController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ProjectImageController;
use App\Http\Controllers\SkillController;
use App\Models\ProjectImage;
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

// Route::get('/', function () {
//     return Inertia::render('Home');
// });
Route::get('/', [FrontendController::class, 'index']);
Route::get('/dashboard', function () {
    return view('admin.dashboard.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// Admin Routes
Route::group(['middleware' => ['auth'], 'prefix' => 'admin', 'as' => 'admin.'], function(){
    Route::resource('hero-section', HeroController::class);
    Route::resource('about-section', AboutController::class);
    Route::resource('skill-section', SkillController::class);
    Route::resource('love-to-do', LoveToDoController::class);
    Route::resource('projects', ProjectController::class);
    Route::resource('project-images', ProjectImageController::class);



});
