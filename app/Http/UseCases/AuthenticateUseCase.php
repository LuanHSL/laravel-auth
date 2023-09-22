<?php

namespace App\Http\UseCases;

use App\Dtos\CredentialData;
use Exception;
use Tymon\JWTAuth\Exceptions\JWTException;
use JWTAuth;

class AuthenticateUseCase
{
  public function __invoke(CredentialData $credentials)
  {
    try {
      if (!$token = JWTAuth::attempt((array) $credentials)) {
        throw new Exception('Invalid credentials', 401);
      }
    } catch (JWTException $e) {
      throw new Exception('Unknown error', 500);
    }

    return [
      'token' => $token,
    ];
  }
}
