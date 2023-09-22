<?php

namespace App\Http\Actions;

use App\Http\Controllers\Controller;
use App\Models\Worker;
use Illuminate\Http\JsonResponse;

class WorkersAction extends Controller
{
  public function __invoke(): JsonResponse {
    $worker = Worker::all();
    return $this->response($worker->toArray());
  }
}
