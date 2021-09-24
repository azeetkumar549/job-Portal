<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JobController;

Route::get('/',[HomeController::class,"home"])->name('home');
Route::get('/recruitments',[HomeController::class,"recruitment"])->name('recruitment');
Route::get('/recruitments/{id}',[HomeController::class,"view_job"])->name('view_job');

Route::prefix("admin")->group(function(){
    Route::get("/",[AdminController::class,"home"])->name("admin.home");
    Route::Resource("jobs",JobController::class);
    // admin/jobs/index  = all call jobs.index
    //admin/jobs/create = insert form jobs.create
    //admin/jobs/store = post insert function jobs.store
    //admin/jobs/1 = show get method jobs.show
    //admin/jobs/1 = delete method jobs.delete
    //admin/jobs/1 = update form get jobs.edit
    //admin/jobs/1 = put method update  jobs.update
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
