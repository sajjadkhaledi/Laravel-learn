<?php

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CategoryController;

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

Route::apiResource('category', CategoryController::class);

Route::post('login', function (Request $request) {
    if(auth()->attempt(['email' => $request->email, 'password' =>$request->password])){

        $user = auth()->user();
        $user->api_token = Str::random(60);
        $user->save();
        return $user;
    }
    return response()->json([
        'error' => 'Unauthentidated user'
    ], 401);
});



    Route::get('logout', function (Request $request) {

        if(auth()->user()){
            $user = auth()->user();
            $user->api_token = null;
            $user->save;
            return response()->json([
                'msg' => 'thanks for using this app'
            ]);
        }
        return response()->json([
            'error' => 'unable to logout '
        ], 401);

    });





Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
