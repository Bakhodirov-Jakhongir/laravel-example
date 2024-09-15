<?php

namespace Bakhodirov\LaravelExample\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller;

class MyController extends Controller
{
    public function index(): JsonResponse
    {
        return response()->json(['status' => true]);
    }

    public function getMessage(): JsonResponse
    {
        return response()->json([
            'status' => true,
            'message' => 'success'
        ]);
    }
}
