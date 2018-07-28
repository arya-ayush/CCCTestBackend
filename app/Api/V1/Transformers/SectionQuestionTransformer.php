<?php
/**
 * Created by PhpStorm.
 * User: ayush
 * Date: 28/7/18
 * Time: 4:43 PM
 */

namespace App\Api\V1\Transformers;

use App\Section;
use League\Fractal\TransformerAbstract;

class SectionQuestionTransformer extends TransformerAbstract
{
    protected $defaultIncludes = [
        'question'
    ];

    public function transform(Section $section)
    {
        return [
            'name' => $section->name,
        ];
    }

    public function includeQuestion(Section $section)
    {
        $question = $section->question;
        return $this->collection($question, new QuestionTransformer);
    }

}