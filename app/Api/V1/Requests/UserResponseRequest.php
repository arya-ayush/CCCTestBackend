<?php
/**
 * Created by PhpStorm.
 * User: ayush
 * Date: 28/7/18
 * Time: 10:08 PM
 */

namespace App\Api\V1\Requests;


use App\Api\V1\contracts\AddUserResponseRequest;

class UserResponseRequest extends Request implements AddUserResponseRequest
{

    const STUDENT_NO = 'student_no';
    const NAME = 'name';
    const GENDER = 'gender';
    const BRANCH = 'branch';
    const EMAIL = 'email';
    const MOBILE_NO = 'mobile_no';
    const STUDENT_ID = 'student_id';
    const QUESTION_ID = 'question_id';
    const RESPONSE = 'response';
    const ALL_RESPONSES = 'all_responses';

    public function getStudentNo()
    {
        return $this->get(self::STUDENT_NO);
    }

    public function getStudentName()
    {
        return $this->get(self::NAME);
    }

    public function getStudentGender()
    {
        return $this->get(self::GENDER);
    }

    public function getStudentBranch()
    {
        return $this->get(self::BRANCH);
    }

    public function getStudentMobile()
    {
        return $this->get(self::MOBILE_NO);
    }

    public function getStudentID()
    {
        return $this->get(self::STUDENT_ID);
    }

    public function getQuestionID()
    {
        return $this->get(self::QUESTION_ID);
    }

    public function getResponse()
    {
        return $this->get(self::RESPONSE);
    }

    public function getStudentEmail()
    {
        return $this->get(self::EMAIL);
    }

    public function getAllResponses()
    {
        return $this->get(self::ALL_RESPONSES);
    }
}