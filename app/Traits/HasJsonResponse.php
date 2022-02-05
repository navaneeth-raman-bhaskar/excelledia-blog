<?php

namespace App\Traits;

use Illuminate\Http\JsonResponse;

trait HasJsonResponse
{
    protected function successResponse($data = [], $message = 'Success', $errors = [], $statusCode = 200, $headers = [])
    {
        return $this->sendJsonResponse(func_get_args());

    }

    protected function errorResponse($data = [], $message = 'Error', $errors = [], $statusCode = 400, $headers = [])
    {
        return $this->sendJsonResponse(func_get_args());

    }

    private function sendJsonResponse($data = [], $message = 'Success', $errors = [], $statusCode = 200, $headers = []): JsonResponse
    {
        if (is_string($data)) {
            $message = $data;
            $data = [];
        }

        return response()->json([
            'data' => $data,
            'message' => $message,
            'errors' => $errors,
        ], $statusCode)
            ->withHeaders($headers);
    }
}
