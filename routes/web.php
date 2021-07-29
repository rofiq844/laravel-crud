<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

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
Route::get('/student-view',[StudentController::class,'index']);
Route::post('/student-add',[StudentController::class,'store']);
Route::get('/', function () {
    return view('welcome');
});


Route::get('/employee/view', [App\Http\Controllers\EmployeeController::class, 'view'])->name('employee.view');
Route::get('/employee/add', [App\Http\Controllers\EmployeeController::class, 'add'])->name('employee.add');
Route::post('/employee/store', [App\Http\Controllers\EmployeeController::class, 'store'])->name('employee.store');
Route::get('/employee/edit', [App\Http\Controllers\EmployeeController::class, 'edit'])->name('employee.edit');
Route::post('/employee/update', [App\Http\Controllers\EmployeeController::class, 'update'])->name('employee.update');