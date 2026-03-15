<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;
use App\Models\Task;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {

    $total = Task::count();
    $completed = Task::where('status','completed')->count();
    $pending = Task::where('status','pending')->count();
    $high = Task::where('priority','high')->count();

    return view('dashboard', compact(
        'total','completed','pending','high'
    ));

})->middleware(['auth','verified'])->name('dashboard');

Route::middleware(['auth'])->group(function () {

    // PROFILE ROUTES (required for Breeze)
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // TASK ROUTES
    Route::get('/tasks',[TaskController::class,'index'])->name('tasks.index');
    Route::get('/tasks/create',[TaskController::class,'create'])->name('tasks.create');
    Route::post('/tasks',[TaskController::class,'store'])->name('tasks.store');
    Route::get('/tasks/{id}',[TaskController::class,'show'])->name('tasks.show');
    Route::get('/tasks/{id}/edit',[TaskController::class,'edit'])->name('tasks.edit');
    Route::put('/tasks/{id}',[TaskController::class,'update'])->name('tasks.update');

});

require __DIR__.'/auth.php';