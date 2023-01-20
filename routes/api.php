<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TagController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\RegistrationController;

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

//Relationship
Route::get('showphoto', [TagController::class, 'showPhoto']); //show photo
Route::post('tagphoto', [PhotoController::class, 'photoTag']); //addtag
Route::get('showvideo', [TagController::class, 'showVideo']); //show video
Route::post('addtagphoto', [TagController::class, 'addTagphoto']);


//Query Builder
Route::get('show', [MemberController::class, 'dbOperation']);
Route::post('insert', [MemberController::class, 'dbInsert']);

//validation

Route::post('register', [RegistrationController::class, 'register']);
