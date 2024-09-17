<?php

use App\Http\Controllers\ClassRooms\ClassRoomController;
use App\Http\Controllers\Grades\GradeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Sections\SectionController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

Route::group(['middleware' => ['guest']], function () {
    Route::get('/', function () {
        return view('auth.login');
    });
});


Route::group(
    ['prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath', 'auth']
    ], function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::resource('grades', GradeController::class);
    Route::resource('Classrooms', ClassRoomController::class);
    Route::post('delete_all', [ClassRoomController::class, 'delete_all'])->name('delete_all');
    Route::post('Filter_Classes', [ClassRoomController::class, 'Filter_Classes'])->name('Filter_Classes');

    Route::resource('Sections', SectionController::class);
    Route::get('classes/{id}', [SectionController::class, 'getclasses'])->name('classes');


});


require __DIR__ . '/auth.php';
//Route::middleware('auth')->group(function () {
//    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
//});
