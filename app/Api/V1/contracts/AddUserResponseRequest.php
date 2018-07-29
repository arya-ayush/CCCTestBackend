<?php
/**
 * Created by PhpStorm.
 * User: ayush
 * Date: 28/7/18
 * Time: 10:03 PM
 */

namespace App\Api\V1\contracts;


interface AddUserResponseRequest
{
    public function getStudentNo();

    public function getStudentName();

    public function getStudentGender();

    public function getStudentBranch();

    public function getStudentMobile();

    public function getStudentEmail();

    public function getStudentID();

    public function getQuestionID();

    public function getResponse();

    public function getAllResponses();

}