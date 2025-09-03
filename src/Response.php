<?php

namespace gabogalro\responseHelpers;

class Response
{
    /**
     * Returns a JSON response with the given data and status code.
     *
     * @param mixed $ResponseRequest The data to be returned as JSON.
     * @param int $StatusCode The HTTP status code for the response.
     * @return string The JSON encoded response.
     */

    public static function json($ResponseRequest, $StatusCode = 200)
    {
        http_response_code($StatusCode);
        header('Content-Type: application/json');
        return json_encode($ResponseRequest);
    }

    /**
     * Returns a JSON success response with the given message and data.
     *
     * @param string $message The success message.
     * @param mixed $data Optional. Additional data to include in the response.
     * @param int $statusCode The HTTP status code for the success response.
     * @return string The JSON encoded success response.
     */
    public static function success($message, $data = null, $statusCode = 200)
    {
        return self::json([
            'success' => true,
            'message' => $message,
            'data' => $data
        ], $statusCode);
    }

    /**
     * Returns a JSON error response with the given message and errors.
     *
     * @param string $message The error message.
     * @param mixed $errors Optional. Additional error details.
     * @param int $statusCode The HTTP status code for the error response.
     * @return string The JSON encoded error response.
     */
    public static function error($message, $errors = null, $statusCode = 500)
    {
        return self::json([
            'success' => false,
            'message' => $message,
            'errors' => $errors
        ], $statusCode);
    }
}
