<?php

namespace App\Http\Actions;

use App\Http\Controllers\Controller;
use App\Dtos\CredentialData;
use App\Http\UseCases\AuthenticateUseCase;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class UserLoginAction extends Controller
{
  public function __construct(
    private AuthenticateUseCase $authenticateUseCase
  ) {}

  public function __invoke(Request $request): JsonResponse {
    try {
      $request->validate([
        'email' => 'required|email',
        'password' => 'required'
      ]);
    } catch (ValidationException $e) {
      return $this->response($e->errors(), 400);
    }
    $credentialData = CredentialData::fromRequest($request);
    return $this->response(($this->authenticateUseCase)($credentialData));
  }
}