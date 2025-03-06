<?php

namespace App\Helpers;

use Illuminate\Http\JsonResponse;

class ApiResponse
{


    public const RETRIEVE = 'Data Retrieved Successfully';
    public const UPDATED = 'Data Updated Successfully';
    public const DELETED = 'Data Deleted Successfully';
    public const ERROR = 'Sorry Something Went Wrong';
    public const DONE = 'Done';


    public static function errors(array|string|null $errorsArray = null, int $code = 400): JsonResponse
    {
        return response()->json(
            [
                'status' => false,
                'message' => $errorsArray ?? self::ERROR], $code);
    }

    public static function error(array|string|null $errorMessage = null, int $code = 400): JsonResponse
    {
        return response()->json(
            [
                'status' => false,
                'message' => __($errorMessage) ?? self::ERROR], $code);
    }

    public static function data(mixed $data, string $message = null, int $code = 200): JsonResponse
    {

        return response()->json([
            'status' => true,
            'message' => __($message) ?? __(self::RETRIEVE),
            'data' => $data

        ], $code);
    }

    public static function collection(mixed $data, string $message = null, int $code = 200): JsonResponse
    {

        return response()->json([
            'status' => true,
            'message' => __($message) ?? __(self::RETRIEVE),
            'data' => $data

        ], $code);
    }

    public static function success(string|null $message = null, int $code = 200): JsonResponse
    {
        return response()->json([
            'status' => true,
            'message' => $message ?? self::DONE
        ], $code);
    }


    public static function dataWithMeta(mixed $data, string $message = null, int $code = 200): JsonResponse
    {

        $data = $data->toArray(request());
        return response()->json([
            'status' => true,
            'message' => __($message) ?? __(self::RETRIEVE),
            "data" => $data['data'],
            "meta" => $data['meta'],

        ], $code);
    }

}
