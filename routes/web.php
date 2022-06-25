<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
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


Route::get('/', function (){
    return view('index');
});
Route::get('/api/v1', [ArticleController::class, 'index']);
// Route::get('/api/v1', function () {
//     return 'tes';
// });
// Route::post('/api/v1', function () {
//     return 'tes';
// });
// Route::patch('/api/v1', function () {
//     return 'tes';
// });
// Route::delete('api/v1', function ($id) {
//     return 'tes';
// });