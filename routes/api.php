<?php

use App\Http\Controllers\API\Blog\BlogController;
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

Route::prefix('blog')->group(function () {
    Route::resource('posts', BlogController::class)->only('index', 'show');
    Route::post('posts/{post}/comments/{comment?}', [BlogController::class, 'comment']);
});
