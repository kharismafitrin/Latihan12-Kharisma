<?php

use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\BiodataController;
use App\Http\Controllers\HistoryChatController;
use App\Http\Controllers\KategoriController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/portofolio', function () {
    return view('portofolio/index');
});

//gemini AI
// Route::get('/history_chat', function () {
//     return view('chatbot/index');
// });
// Route::post('/chatbot', [GeminiAIController::class, 'handleChat']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// //ini latihan routing
// Route::get('/search', [UserController::class, 'searchUser']);
// Route::get('/finduser/{id}', [UserController::class, 'findUser']);

//group routing by prefix
Route::prefix('search')->group(function () {
    Route::get('/', [UserController::class, 'searchUser']);
    Route::get('/{id}', [UserController::class, 'findUser']);
});

Route::resource('history_chat', HistoryChatController::class);
Route::post('/chatbot', [HistoryChatController::class, 'store']);

Route::get('biodata/{id}', [BiodataController::class, 'edit']);

Route::resource('biodata', BiodataController::class);

// Route::get('/admin', function () {
//     return view('admin.kategori');
// });

// Route::get('/admin2', function () {
//     return view('admin.formkategori');
// });

Route::get('/admin', [KategoriController::class, 'index']);

// Route::post('login', [AuthController::class, 'login']);