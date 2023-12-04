<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin_controller;
use App\Http\Controllers\agent_controller;
use App\Http\Controllers\contract_controller;
use App\Http\Controllers\registration_controller;
use App\Http\Controllers\login_controller;






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
Route::get('dash', function () {
    return view('welcome');
});
Route::get('/', function () {
    return view('home');
});

Route::get('home', function () {
    return view('home');

});


Route::get('about', function () {
    return view('about');
});

Route::get('log', function () {
    return view('log');
});

Route::get('con', function () {
    return view('all');
});

Route::get('reg', function () {
    return view('registration');
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

Route::middleware(['auth','role:admin'])->group(function()
{
    Route::get('admin', [admin_controller::class, 'admin_dashboard'])->name('admin_dashboard');


});

Route::middleware(['auth','role:agent'])->group(function(){

Route::get('agent', [agent_controller::class, 'agent_dashboard'])->name('agent_dashboard');


});

Route::get('contract',[contract_controller::class,'index']);
Route::post('contract',[contract_controller::class,'store']);


Route::get('registration',[registration_controller::class,'register']);
 Route::post('registration',[registration_controller::class,'register_store']);

 Route::get('login',[login_controller::class,'login']);
 Route::post('login',[login_controller::class,'login_store']);