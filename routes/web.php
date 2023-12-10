<?php

use App\Http\Controllers\EmployeeController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::resource('employee-detail', EmployeeController::class);
Route::get('print_pdf/{id}', [EmployeeController::class,'print_pdf']);
Route::get('employee-datatable',[EmployeeController::class,'datatable']);
Route::get('/delete-academics/{id}',[EmployeeController::class,'delete_academic']);
Route::get('/delete-experience/{id}',[EmployeeController::class,'delete_experience']);
Route::get('/delete-family/{id}',[EmployeeController::class,'delete_family']);
