<?php
/**
 * Created by PhpStorm.
 * User: ayush
 * Date: 28/7/18
 * Time: 4:58 PM
 */

namespace App\Api\V1\contracts;


interface AddQuestionRequest
{
    public function getQuestion();

    public function getOption1();

    public function getOption2();

    public function getOption3();

    public function getOption4();

    public function getSectionId();

    public function getCorrectAnswerOptionNumber();
}