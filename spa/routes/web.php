<?php

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

Route::get('/{any}', function () {
    return view('welcome');
// {any}だけでは「/」へのアクセスがエラーになってしまうから、正規表現で任意の0字以上を指定している
})->where('any','.*');

Route::patch('/user/{user}', function(App\User $user,Request $request){

	$user->update($request->user);

	return response()->json(['user' => $user]);

});
