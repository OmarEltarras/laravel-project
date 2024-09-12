<?php

use App\Http\Controllers\EmployerContoller;
use App\Http\Controllers\JobController;
use App\Http\Controllers\AuthManager;
use Illuminate\Support\Facades\Route;

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
Route::redirect('/','/login');
Route::get('/login',[AuthManager::class,'login'])->name('login');
Route::get('/register',[AuthManager::class,'register'])->name('register');
Route::post('/login',[AuthManager::class,'loginPost'])->name('login.post');
Route::post('/register',[AuthManager::class,'registerPost'])->name('register.post');
Route::get('/home/logout',[AuthManager::class,'logout'])->name('logout');

Route::group(['middleware'=>'auth'],function(){
    //if you are authorized then you are able to show these routes

Route::get('/home', function () {
    return view('home');
})->name('home');
Route::get('/employers',[EmployerContoller::class,"index"])->name('employers.index');
Route::get('/employers/create',[EmployerContoller::class,'create'])->name('employers.create');
Route::post('/employers',[EmployerContoller::class,"store"])->name('employers.store');
Route::get('/eployers/{employer}/edit',[EmployerContoller::class,'edit'])->name('employers.edit');
Route::put('/employers/{employer}',[EmployerContoller::class,'update'])->name('employers.update');
Route::delete('/employers/{employer}',[EmployerContoller::class,"destroy"])->name('employers.destroy');
Route::get('/employers/{employer}',[EmployerContoller::class,'show'])->name('employers.show');


Route::get('/jobs',[JobController::class,"index"])->name('jobs.index');
Route::get('/jobs/create',[JobController::class,'create'])->name('jobs.create');
Route::post('/jobs',[JobController::class,'store'])->name('jobs.store');
Route::get('jobs/{job}/edit',[JobController::class,"edit"])->name('jobs.edit');
Route::put('jobs/{job}',[JobController::class,"update"])->name('jobs.update');
Route::delete('/jobs/{job}',[JobController::class,'destroy'])->name('jobs.destroy');
Route::get('/jobs/{job}',[JobController::class,'show'])->name('jobs.show');
});