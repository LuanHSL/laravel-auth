<?php

use App\Http\Actions\UserLoginAction;
use Illuminate\Support\Facades\Route;

Route::get('authenticate/check', function () {
  return response()->json(['status' => 'valid']);
})->middleware('jwt.auth');

Route::post('login', UserLoginAction::class);

Route::group(['middleware' => 'jwt.auth'], function () {
  // Place your routes that will be protected by JWT authentication
});