<?php

use App\Http\Actions\UserLoginAction;
use App\Http\Actions\UserLogoutAction;
use App\Http\Actions\WorkersAction;
use Illuminate\Support\Facades\Route;

Route::get('authenticate/check', function () {
  return response()->json(['status' => 'valid']);
})->middleware('jwt.auth');

Route::post('login', UserLoginAction::class);

Route::group(['middleware' => 'jwt.auth'], function () {
  Route::get('workers', WorkersAction::class);
});