<?php

use App\Http\Controllers\EmployeeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
//          route        controller_name    method_name
    //All Emplyees
Route::get('employees', [EmployeeController::class, 'getEmployee']);
    //Specific Employee
Route::get('employees/{id}', [EmployeeController::class, 'getEmployeeById']);
    //AddEmployee
Route::post('addEmployees/', [EmployeeController::class, 'addEmployee']);
    //Update Employee
Route::put('updateEmployees/{id}', [EmployeeController::class, 'updateEmployee']);
    //Delete Employees
Route::delete('deleteEmployees/{id}', [EmployeeController::class, 'deleteEmployee']);