<?php

use App\Http\Controllers\EmployeeController;
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

Route::get('/', [EmployeeController::class, 'ShowForms']);
Route::post('/inserData', [EmployeeController::class, 'InsertData']);
Route::get('/employees', [EmployeeController::class, 'ShowEmployee'])->name('ShowEmployee');
Route::delete('/employees/{id}', [EmployeeController::class, 'DeleteEmployee'])->name('employee.delete');
Route::get('/employee/{id}', [EmployeeController::class, 'EditEmployee'])->name('employee.edit');
Route::put('/update/{id}', [EmployeeController::class, 'UpdateData'])->name('employee.update');

Route::get('/index', function () {
    return view('index');
});
