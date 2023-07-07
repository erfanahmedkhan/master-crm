<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\CustomerController;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('customer', [CustomerController::class, 'customeradd']);
Route::get('save-customer/{id}', [CustomerController::class, 'save_customer']);

Route::get('get-customers', [CustomerController::class, 'get_all_customer']);
Route::get('get-customer-by-id/{id}', [CustomerController::class, 'get_customer_by_id']);
