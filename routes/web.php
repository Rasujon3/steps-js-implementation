<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;

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

Route::get('/', [EmployeeController::class, 'ShowForms']);
Route::post('/inserData', [EmployeeController::class, 'InsertData']);
Route::get('/employees',[EmployeeController::class, 'ShowEmployee'])->name('ShowEmployee');
Route::get('/employees/{id}',[EmployeeController::class, 'DeleteEmployee'])->name('emp.delete');

Route::get('/index', function () {
    return view('index');
});
