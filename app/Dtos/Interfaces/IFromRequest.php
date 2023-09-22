<?php

namespace App\Dtos\Interfaces;

use Illuminate\Http\Request;

interface IFromRequest
{
  public static function fromRequest(Request $request);
}
