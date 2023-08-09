<?php

use App\Http\Controllers\AdminToolController;
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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::group([
    'prefix' => 'admin',
    'as' => 'admin.',
    'controller' => AdminToolController::class,
], function () {
    // get all users
    Route::get('users', 'showUsers')->name('users');
    Route::get('import','showImportForm')->name('import');
    Route::post('import','importExcel')->name('importExcel');
    // download excel example
    Route::get('example','excelExample')->name('downloadExample');

    // download excel that contains all users
    Route::get('export','exportExcel')->name('exportExcel');
});
