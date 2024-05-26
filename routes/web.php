<?php

use App\Http\Controllers\Absenteeism;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AbsenteeismController;

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
Route::get('/login', [AuthController::class, 'login'])->name('login')->middleware('onlyGuest');
Route::post('/login', [AuthController::class, 'authenticating'])->middleware('onlyGuest');
Route::get('/register', [AuthController::class, 'index'])->middleware('onlyGuest');
Route::post('/register', [AuthController::class, 'registered'])->middleware('onlyGuest');
Route::get('/logout', [AuthController::class, 'logout']);



// admin
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth','onlyAdmin']);
Route::get('studentData', [DashboardController::class, 'studentData'])->middleware(['auth','onlyAdmin']);
Route::get('teacherData', [DashboardController::class, 'teacherData'])->middleware(['auth','onlyAdmin']);
Route::get('detailTeacher/{id}', [DashboardController::class, 'detailTeacher'])->middleware(['auth','onlyAdmin']);
Route::get('detailStudent/{id}', [DashboardController::class, 'detailStudent'])->middleware(['auth','onlyAdmin']);
Route::get('deleteStudent/{id}', [DashboardController::class, 'deleteStudent'])->middleware(['auth','onlyAdmin']);
Route::get('/deletedStudent/{id}', [DashboardController::class, 'deletedStudent'])->middleware(['auth','onlyAdmin']);
Route::get('/showDeleted', [DashboardController::class, 'showDeleted'])->middleware(['auth','onlyAdmin']);
Route::get('/restoreStudent/{id}', [DashboardController::class, 'restoreStudent'])->middleware(['auth','onlyAdmin']);
Route::get('/listArticle', [ArtikelController::class, 'listArticle'])->middleware(['auth','onlyAdmin']);
Route::get('/deleteArticle/{id}', [ArtikelController::class, 'deleteArticle'])->middleware(['auth','onlyAdmin']);
Route::get('/deletedArticle/{id}', [ArtikelController::class, 'deletedArticle'])->middleware(['auth','onlyAdmin']);
Route::get('/listAbsenteeism', [AbsenteeismController::class, 'listAbsenteeism'])->middleware(['auth','onlyAdmin']);


// clint
Route::get('/profile', [ProfileController::class, 'index'])->middleware(['auth','onlyClient']);
Route::get('/edit-profile', [ProfileController::class, 'editProfile'])->middleware(['auth','onlyClient']);
Route::put('/edit-profile', [ProfileController::class, 'updateProfile'])->middleware(['auth','onlyClient']);
Route::get('/listArticleUser', [ProfileController::class, 'listArticleUser'])->middleware(['auth','onlyClient']);
Route::get('/deleteArticleUser/{id}', [ArtikelController::class, 'deleteArticleUser'])->middleware('auth');
Route::get('/deletedArticleUser/{id}', [ArtikelController::class, 'deletedArticleUser'])->middleware(['auth','onlyClient']);
Route::get('/absenteeism', [AbsenteeismController::class, 'index'])->middleware(['auth','onlyClient']);
Route::post('/addAbsen', [AbsenteeismController::class, 'addAbsen'])->middleware(['auth','onlyClient']);
Route::get('/updateArticle/{id}', [ArtikelController::class, 'updateArticle'])->middleware(['auth','onlyClient']);
Route::put('/updatedArticle/{id}', [ArtikelController::class, 'updatedArticle'])->middleware(['auth', 'onlyClient']);


// dua duanya
Route::get('/artikel', [ArtikelController::class, 'index'])->middleware('auth');
Route::get('/addArticle', [ArtikelController::class, 'addArticle'])->middleware('auth');
Route::post('/addArticle', [ArtikelController::class, 'storeArticle'])->middleware('auth');
Route::get('/showArticle/{id}', [ArtikelController::class, 'showArticle'])->middleware('auth');