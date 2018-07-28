<?php
/**
 * Created by PhpStorm.
 * User: ayush
 * Date: 28/7/18
 * Time: 4:43 PM
 */

namespace App\Api\V1\Transformers;


use App\Question;
use League\Fractal\TransformerAbstract;

class QuestionAnswerTransformer extends TransformerAbstract
{
    public function transform(Question $question)
    {
        return [
            'id' => (integer)$question->id,
            'question' => $question->question,
            'opt1' => $question->opt1,
            'opt2' => $question->opt2,
            'opt3' => $question->opt3,
            'opt4' => $question->opt4,
            'answer' => $question->answer,
        ];
    }
}