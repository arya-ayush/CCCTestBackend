<?php
/**
 * Created by PhpStorm.
 * Date: 14/04/17
 * Time: 10:50 PM
 */

namespace App\Api\V1\Controllers;


use App\Api\V1\Requests\Request;
use Dingo\Api\Exception\ValidationHttpException;
use Dingo\Api\Routing\Helpers;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Validator;

class Controller extends BaseController
{
    use Helpers, DispatchesJobs;

    public function validate(Request $request, array $rules, array $messages = [], array $customAttributes = [])
    {
        $validator = Validator::make($request->all(), $rules, $messages, $customAttributes);

        if ($validator->fails()) {
            throw new ValidationHttpException($validator->errors());
        }
    }
}