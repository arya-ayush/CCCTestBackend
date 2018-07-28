<?php
/**
 * Created by PhpStorm.
 * User: ayush
 * Date: 28/7/18
 * Time: 5:20 PM
 */

namespace App\Api\V1\Requests;


use App\Api\V1\contracts\AddQuestionRequest;

class QuestionRequest extends Request implements AddQuestionRequest
{
    const QUESTION = 'question';
    const OPTION1 = 'opt1';
    const OPTION2 = 'opt2';
    const OPTION3 = 'opt3';
    const OPTION4 = 'opt4';
    const ANSWER = 'answer';
    const SECTION_ID = 'section_id';

    public function getQuestion()
    {
        return $this->get(self::QUESTION);
    }

    public function getOption1()
    {
        return $this->get(self::OPTION1);
    }

    public function getOption2()
    {
        return $this->get(self::OPTION2);
    }

    public function getOption3()
    {
        return $this->get(self::OPTION3);
    }

    public function getOption4()
    {
        return $this->get(self::OPTION4);
    }

    public function getSectionId()
    {
        return $this->get(self::SECTION_ID);
    }

    public function getCorrectAnswerOptionNumber()
    {
        return $this->get(self::ANSWER);
    }
}