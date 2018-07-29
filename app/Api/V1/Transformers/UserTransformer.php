<?php
/**
 * Created by PhpStorm.
 * User: ayush
 * Date: 29/7/18
 * Time: 3:03 PM
 */

namespace App\Api\V1\Transformers;


use App\User;
use League\Fractal\TransformerAbstract;

class UserTransformer extends TransformerAbstract
{
    public function transform(User $user)
    {

        return [
            'id' => (integer)$user->id,
            'student_no' => $user->student_no,
            'name' => $user->name,
            'gender' => $user->gender,
            'branch' => $user->branch,
            'email' => $user->email,
            'mobile_no' => $user->mobile_no,
            'score' => $user->score,
        ];

    }
}