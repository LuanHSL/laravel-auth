<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected function response(
        mixed $data,
        int $status = 200,
        array $header = []
      ): JsonResponse|null
      {
        if ($data != null) {
          return response()->json($data, $status, $header, JSON_NUMERIC_CHECK);
        }
    
        return null;
      }
}
