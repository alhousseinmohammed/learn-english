<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ExerciseController;
use App\Http\Controllers\LearnerController;
use App\Http\Controllers\ProgressController;
use App\Http\Controllers\LessonController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\TextToSpeechController;
use App\Http\Controllers\ThemeController;
use App\Models\Learner;


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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});

require __DIR__.'/auth.php';


//

Route::get('/', action: function () {
    return view(view: 'leaderboard');
});

Route::get('/textspeach', function () {
    return view('textspeach');
});



Route::resource('/learner', LearnerController::class);

Route::resource('/exercise', ExerciseController::class);

Route::resource('/lesson', LessonController::class);

Route::resource('/theme', ThemeController::class);

Route::resource('/level',LevelController::class);

Route::get('/text-to-speech', [TextToSpeechController::class, 'convertTextToSpeech']);


Route::get('/exercise/next/{id}', [ExerciseController::class, 'showNext'])->name('exercise.showNext');

Route::post('progress/{id}', [ProgressController::class, 'store'])->name('progress.store');

Route::get('/type', function () {
    return view('type');
});

Route::get('exercise/create/{type}', [ExerciseController::class, 'create'])->name('exercise.create');

Route::get('/match', action: function () {
    return view(view: 'match');
});

Route::get(uri: '/leaderboard', action: function () {
    return view(view: 'leaderboard')->with('learners', $learners = Learner::orderBy('experience_points','desc')->get());
})->name('leaderboard');

Route::get(uri: '/produ', action: function () {
    return view(view: 'profile-page');
})->name('produ');

// Route::get('/earn/{gems_earned}',  function ($gems_earned) {
//             $learner = auth()->user()->learner;
//         dd($learner);
//         $learner->current_gems += $gems_earned;
//         $learner->save();
// })->name('learner.earn');

Route::get('/earn/{gems_earned}',  [LearnerController::class, 'earnGems'])->name('learner.earn');

Route::get('/pay/{gems_earned}',  [LearnerController::class, 'payGems'])->name('learner.pay');

Route::get('/shopping', function () {
    return view('shoppingpage');
})->name('shopping');
