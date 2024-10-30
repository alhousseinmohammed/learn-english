<?php

use App\Http\Controllers\ProfileController;
use App\Livewire\AdminDashboard;
use App\Livewire\FindFriends;
use App\Livewire\Levels;
use App\Livewire\Shop;
use App\Livewire\Themes;
use App\Livewire\Users;
use Illuminate\Support\Facades\Route;

use Carbon\Carbon;


use App\Models\Level;
use App\Models\Theme;
use App\Models\Lesson;
use App\Models\League;
use App\Models\Progress;
use Illuminate\Support\Facades\DB;

use App\Http\Controllers\ExerciseController;
use App\Http\Controllers\LearnerController;
use App\Http\Controllers\ProgressController;
use App\Http\Controllers\LessonController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\TextToSpeechController;
use App\Http\Controllers\ThemeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\LeagueController;
use App\Http\Controllers\SuperController;
use App\Models\Learner;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

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
    return view(view: 'dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';


//

Route::get('/', function () {
    return redirect()->route('lesson.index');
});

Route::get('/textspeach', function () {
    return view('textspeach');
});



Route::resource('/learner', LearnerController::class);

Route::resource('/exercise', ExerciseController::class);

Route::resource('/lesson', LessonController::class);

Route::resource('/theme', ThemeController::class);

Route::resource('/levels', LevelController::class);

Route::resource('/language', LanguageController::class);

Route::resource('/league', LeagueController::class);

Route::resource('/super', SuperController::class);

// Route::resource('admin', AdminController::class);


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
    return view(view: 'leaderboard')->with('learners', $learners = Learner::orderBy('experience_points', 'desc')->get())->with('leagues', League::all());
})->name('leaderboard');

Route::get(uri: '/produ', action: function () {
    return view(view: 'profile-page');
})->name('produ');

Route::get(uri: '/edit-produ', action: function () {
    return view(view: 'profile-edit-page');
})->name('eidt-produ');

// Route::get('/earn/{gems_earned}',  function ($gems_earned) {
//             $learner = auth()->user()->learner;
//         dd($learner);
//         $learner->current_gems += $gems_earned;
//         $learner->save();
// })->name('learner.earn');

Route::get('/earn/{gems_earned}',  [LearnerController::class, 'earnGems'])->name('learner.earn');

Route::get('/pay/{gems_earned}',  [LearnerController::class, 'payGems'])->name('learner.pay');

// Route::get('/super',  [LearnerController::class, 'super'])->name('learner.super');

Route::get('/shopping', function () {
    return view('shoppingpage');
})->name('shopping');

// Route::get('/super', function () {
//     return view('superduolingo');
// })->name('super');



Route::get('/skip/{exerciseId}', [ExerciseController::class, 'skip'])->name('exercise.skip');

Route::get('dialogue', function () {
    return view('types.dialogue');
})->name('dialogue');

Route::get('create', function () {
    return view('admin.create.create_any')->with('themes', Theme::all())->with('levels', Level::all());;
})->name('create');

Route::get('create', function () {
    return view('admin.create.create_any')->with('lessons', Lesson::all())->with('themes', Theme::all())->with('levels', Level::all());;
})->name('create');

Route::get('dialogue1', function () {
    return view('types.dialogue1');
})->name('dialogue1');

Route::get('words', function () {
    $learner = Auth::user(); // Get the logged-in learner

    // Load the following and followers relationships correctly

    $learner = auth()->user()->learner;

    if (!$learner) {
        abort(403, 'Learner not found.');
    }

    // Load the 'following' and 'followers' relationships
    $learner->load('following', 'followers');

    return view('words')->with('learner', value: $learner);
})->name('words');

Route::get('users', function () {
    return view(view: 'admin.index.users');
})->name(name: 'users');

// Route::get('admin_dashboard', function () {action:
// function getWeekDates()
// {
//     // Create an array to hold the dates of this week
//     $weekDates = [];

//     // Get the start of the week (Monday)
//     $startOfWeek = Carbon::now()->startOfWeek(); // Change to startOfWeek(Carbon::MONDAY) if needed

//     // Loop through each day of the week (7 days)
//     for ($i = 0; $i < 7; $i++) {
//         $weekDates[] = $startOfWeek->copy()->addDays($i)->toDateString();
//     }

//     // Return the array
//     return $weekDates; // or return view('your.view', compact('weekDates'));
// }
//     return view('admin.admin_dashboard')->with('progress',)->with('week',getWeekDates());
// })->name(name: 'admin_ashboard');

// Route::get('asAdmin', function () {
//     return 'Admin Test Route';
// });




// Route::middleware(['auth', 'admin'])->group(function () {
//     Route::resource('league', LeagueController::class);
// });



Route::get('lang/{locale}', function ($locale) {
    if (in_array($locale, ['en', 'ar'])) {
        Session::put('locale', $locale);  // Store locale in session
        App::setLocale($locale);  // Set locale
    }
    return Redirect::back();  // Redirect to the previous page
});


// Route::middleware('web')->group(function () {
//     Route::get('/', function () {
//         return view('welcome');
//     });

//     Route::get('lang/{locale}', function ($locale) {
//         if (in_array($locale, ['en', 'ar'])) {
//             session(['locale' => $locale]);
//         }
//         return redirect()->back();
//     });
// });
use App\Http\Controllers\LearnerFollowController;

Route::post('/learners/follow', [LearnerFollowController::class, 'store']);
Route::delete('/learners/unfollow', [LearnerFollowController::class, 'destroy']);

Route::get('faq', function () {
    return view('faq');
})->name('faq');



//livewire routes
use App\Livewire\Exercises;
use App\Livewire\Lessons;
use App\Livewire\AdminPanel;
use App\Livewire\Chat;
use App\Livewire\Dashboard;
use App\Livewire\Leaderboard;
use App\Livewire\Learn;

Route::get('/panel', action: AdminPanel::class)->name('panel');
Route::get('/exercises', Exercises::class)->name('exercises');
Route::get('/admin_dashboard', AdminDashboard::class)->name('admin_dashboard');
Route::get('/levels', Levels::class)->name('levels');
Route::get('/themes', action: Themes::class)->name('themes');
Route::get('/lessons', Lessons::class)->name('lessons');
Route::get('/lessons', Lessons::class)->name('lessons');
Route::get('/exercises', Exercises::class)->name('exercises');
Route::get('/users', Users::class)->name('users');

Route::get('/learn', Learn::class)->name('learn');
Route::get('/leaderboard', action: Leaderboard::class)->name('leaderboard');
Route::get('/dashboard', action: Dashboard::class)->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/shop', action: Shop::class)->name('shop');

Route::get('/find', FindFriends::class)->name('find');
Route::get('/chat', action: Chat::class)->name('chat');

Route::get('/test-env', function () {
    dd([
        'PUSHER_APP_ID' => env('PUSHER_APP_ID'),
        'LARAVEL_WEBSOCKETS_PORT' => env('LARAVEL_WEBSOCKETS_PORT'),
        'APP_ENV' => env('APP_ENV'),
    ]);
});
