<?php

use App\Modules\User\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get("/user", [UserController::class, "index"]);

Route::get('/hello', function () {
//    $user = new \App\Modules\User\Models\User;
//    $user->name = "Segun";
//    return "welcome, {$user->name}";

    return view('user::test', ["user" => "Segun"]);
});
