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

class SectionTransformer extends TransformerAbstract
{

    public function transform(Section $section)
    {
        return [
            'id' => (integer)$section->id,
            'name' => $section->name,
        ];
    }


}