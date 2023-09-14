<?php

use App\Http\Controllers\StudentController;
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
// Route / Routing Rule
Route::get('/', function (){
    // return "This is the Home Page";
    return view('home');
});

Route::get('/students', [StudentController::class, 'index'])->name('students.list');
/* Soft Delete Routes */
Route::get('/students/trash', [StudentController::class, 'index_trash'])->name('students.trash');
Route::get('/students/{id}/restore', [StudentController::class, 'restore'])->name('students.restore');
Route::get('/students/{id}/delete-forever', [StudentController::class, 'delete_forever'])->name('students.delete_forever');
/* Soft Delete Routes */
Route::post('/students', [StudentController::class, 'store'])->name('students.save');
Route::get('/students/create', [StudentController::class, 'create'])->name('students.new');
Route::get('/students/search-by-phone', [StudentController::class, 'search_by_phone'])->name('students.by_phone');
Route::get('/students/search-by-name', [StudentController::class, 'search_by_name'])->name('students.by_name');
Route::get('/students/search-by-field', [StudentController::class, 'search_by_field'])->name('students.by_field');
Route::get('/students/search-dynamically', [StudentController::class, 'search_dynamically'])->name('students.by_dynamic');
Route::get('/students/{id}', [StudentController::class, 'show'])->name('students.view');
Route::get('/students/{id}/edit', [StudentController::class, 'edit'])->name('students.edit');
Route::put('/students/{id}', [StudentController::class, 'update'])->name('students.update');
Route::delete('/students/{id}', [StudentController::class, 'destroy'])->name('students.delete');


