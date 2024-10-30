<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\LanguageAssistantController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/greet', function () {
    return response()->json(['message' => 'Hello from Laravel!']);
});

use App\Http\Controllers\ProgressController;

// Route::get('/progress', [ProgressController::class, 'index']);


Route::post('/progress', [ProgressController::class, 'store']);
Route::post('/login', [AuthController::class, 'login']);
Route::middleware('auth:sanctum')->get('/me', function (Request $request) {
    return $request->user();
});

use App\Http\Controllers\AssistantController;
use App\Http\Controllers\HuggingFaceController;

// Route::post('/language-assistant', [AssistantController::class, 'getResponse']);

Route::post('/hugging-face-response', [HuggingFaceController::class, 'getResponse']);

use App\Http\Controllers\AnthropicController;

Route::post('/anthropic/get-response', [AnthropicController::class, 'getResponse']);
