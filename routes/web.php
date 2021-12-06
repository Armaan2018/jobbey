<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Auth\LoginController as AdminLoginController;
use App\Http\Controllers\Myuser\Auth\RegisterController as UserRegisterController;
use App\Http\Controllers\Admin\HomeController as AdminHomeController;
use App\Http\Controllers\BasicController;
use App\Http\Controllers\TaskController;

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

// Auth::routes();


// Route::get('/admin/login',[App\Http\Controllers\AdminController::class,'showAdminLogin'])->name('admin-login');


Route::get('/user/register',[App\Http\Controllers\BasicController::class,'showUserRegister'])->name('user.registration');

Route::get('/user/login',[App\Http\Controllers\BasicController::class,'showUserLogin'])->name('user.signin');

Route::get('/user/profile',[App\Http\Controllers\BasicController::class,'showUserProfile'])->name('user.profile');

Route::post('/user/profile',[App\Http\Controllers\BasicController::class,'editUser'])->name('user.profile.update');

Route::post('/user-register',[App\Http\Controllers\Auth\RegisterController::class,'register'])->name('user.register');

Route::post('/user-login',[App\Http\Controllers\Auth\LoginController::class,'login'])->name('user.login');

Route::post('/user-logout',[App\Http\Controllers\Auth\LoginController::class,'logout'])->name('user.logout');

 // Route::post('/user-register',[UserRegisterController::class,'register'])->name('user.register');





Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



 Route::prefix('admin')->name('admin')->group(function(){
 	Route::middleware(['guest:admin'])->group(function(){

 		Route::get('/login',[AdminLoginController::class,'showLoginForm'])->name('login');
 		 Route::post('/login',[AdminLoginController::class,'login'])->name('login.submit');
 

 	}); 	


 	Route::middleware(['auth:admin'])->group(function(){

     
        Route::get('/home',[AdminHomeController::class,'index'])->name('home');
 		Route::post('/logout',[AdminLoginController::class,'logout'])->name('logout');

 	});
 });



 Route::prefix('jobs')->name('job.')->group(function(){

 	Route::get('/',[BasicController::class,'index'])->name('alljob');

 	Route::get('/post-a-task',[TaskController::class,'index'])->name('taskcreate');
 	Route::post('/post-a-task',[TaskController::class,'store'])->name('task.create');
 	Route::get('/view-task/{id}',[TaskController::class,'singleTask'])->name('task.single');
 	Route::post('/view-task-form',[TaskController::class,'singleConfirm'])->name('confirm');




 	 

 });



 	Route::get('jobs/view-task/delete-applicants/{id}',[TaskController::class,'deleteApplicants'])->name('delete.applicants');

 	 Route::get('/agreement',[TaskController::class,'agreeShow'])->name('agreement');
 	 Route::get('jobs/view-task/agreement/{id}',[TaskController::class,'agreeFinal'])->name('agreement.sign');


