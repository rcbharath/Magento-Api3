<?php

namespace Sunel\Api\Exception;

use Exception;
use League\Route\Http\Exception as HttpException;

class UnknownVersionException extends HttpException
{
    /**
     * Create a new unknown version exception instance.
     *
     * @param string     $message
     * @param \Exception $previous
     * @param int        $code
     *
     * @return void
     */
    public function __construct($message = null, Exception $previous = null, $code = 0)
    {
        parent::__construct(400, $message ?: 'The version given was unknown or has no registered routes.', $previous, [], $code);
    }
}