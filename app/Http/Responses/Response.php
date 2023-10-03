<?php

namespace App\Http\Responses;

use Illuminate\Http\Resources\Json\JsonResource;

class Response
{

    public function success(array|JsonResource $data = null, int $code = 200): \Illuminate\Http\JsonResponse
    {
        $res = (object) [
            'error' => null,
            'result'    => $data,
        ];
        return response()->json($res,$code);
    }

    public function error(string $err, array|JsonResource $data = null, int $code = 500): \Illuminate\Http\JsonResponse
    {
        $res = (object) [
            'error' => $err,
            'result'    => $data
        ];
        return response()->json($res, $code);
    }

}