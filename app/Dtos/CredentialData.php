<?php

namespace App\Dtos;

use App\Dtos\Interfaces\IFromRequest;
use Illuminate\Http\Request;

/**
 * Class CredentialData
 */
class CredentialData extends DataTransferObject implements IFromRequest
{
  public ?string $email;
  public ?string $password;

  public static function fromRequest(Request $request)
  {
    return new self([
      'email' => $request->get('email'),
      'password' => $request->get('password'),
    ]);
  }
}
