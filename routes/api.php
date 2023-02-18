<?php
namespace App\Http\Controllers\LoginController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\SubjectController;
use \App\Http\Controllers\QuestionController;
use \App\Http\Controllers\LoginController;
use App\Http\Controller\OauthAccessTokenController;

use Illuminate\Support\Facades\Auth;
use App\User;
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

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
   // return $request->user();
//});

Route::get('/subjects', [SubjectController::class,'getData']);
Route::get('/questions', [QuestionController::class,'getData']);

Route::apiResources([
    'subjects'=>SubjectController::class,
    'questions'=>QuestionController::class
]);
//definicao de rotas by helena
Route::group(['midleware'=>['guest:api']],function(){
    Route::get(
        '/' ,function()
        {return '';}
    );
    Route::post('login', 'Controllers\LoginController@login');
});

Route::group(['midleware'=>['auth:api']],function(){
    Route::get(
        '/dados' ,function()
        {return 'autenticado';}
    );
    Route::get('logout', 'Controllers\LoginController@logout');
});
//por testar
//Route::post('login', [OauthAccessTokenController::class, 'login']);

//Route::middleware('auth:Controllers')->get('/user', function (Request $request) {
  //  return $request->user();
//});
