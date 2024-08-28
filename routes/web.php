<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Middleware\GuardMiddleware;
use App\Http\Middleware\IsAdminMiddleware;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [AuthController::class, "showLoginForm"])->name('login')->middleware(GuardMiddleware::class);
Route::post('/login', [AuthController::class, "loginUser"]);

Route::get('/register', [AuthController::class, "showRegisterForm"]);
Route::post('/register', [AuthController::class, "registerUser"]);
Route::get('/protected-resource', [AuthController::class, "protectedResource"])
->name("protected-resource")
->middleware('auth');


Route::get("admin",[AuthController::class, "admin"])->middleware(["auth", IsAdminMiddleware::class]);


Route::get("author",[AuthController::class, "author"]);
Route::get("editor",[AuthController::class, "editor"]);
Route::get("logout",[AuthController::class, "logout"]);











