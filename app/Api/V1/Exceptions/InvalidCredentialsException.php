<?php
/**
 * Created by PhpStorm.
 * User: kushagra
 * Date: 16/04/17
 * Time: 12:29 PM
 */

namespace App\Api\V1\Exceptions;


class InvalidCredentialsException extends HttpException
{
    const ERROR_MESSAGE = 'Invalid Credentials';

    public function __construct()
    {
        parent::__construct(self::ERROR_MESSAGE, self::ERROR_CODE_INVALID_CREDENTIALS);
    }
}