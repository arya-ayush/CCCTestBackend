<?php
/**
 * Created by PhpStorm.
 * User: ayush
 * Date: 28/7/18
 * Time: 4:36 PM
 */

namespace App\Api\V1\Controllers;


use App\Api\V1\Requests\SectionRequest;
use App\Api\V1\Transformers\SectionQuestionTransformer;
use App\Api\V1\Transformers\SectionTransformer;
use App\Section;

class SectionController extends Controller
{
    public function store(SectionRequest $request)
    {
        $section = new Section();
        $section->name = $request->getSectionName();
        $section->save();
        return $this->response->item($section, new SectionTransformer);
    }

    public function index(){
        $section = Section::all();
        return $this->response->collection($section, new SectionQuestionTransformer);
    }



}