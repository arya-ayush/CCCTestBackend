<?php
/**
 * Created by PhpStorm.
 * User: ayush
 * Date: 28/7/18
 * Time: 5:03 PM
 */

namespace App\Api\V1\Controllers;


use App\Api\V1\Requests\QuestionRequest;
use App\Api\V1\Transformers\QuestionTransformer;
use App\Question;

class QuestionController extends Controller
{
    public function store(QuestionRequest $request)
    {
        $question = new Question();
        $question->question=$request->getQuestion();
        $question->opt1=$request->getOption1();
        $question->opt2=$request->getOption2();
        $question->opt3=$request->getOption3();
        $question->opt4=$request->getOption4();
        $question->section_id=$request->getSectionId();
        $question->answer=$request->getCorrectAnswerOptionNumber();
        $question->save();
        return $this->response->item($question, new QuestionTransformer);
    }
}