<?php
/**
 * Created by PhpStorm.
 * User: ayush
 * Date: 28/7/18
 * Time: 4:34 PM
 */

namespace App\Api\V1\Requests;


use App\Api\V1\contracts\AddSectionRequest;

class SectionRequest extends Request implements AddSectionRequest
{

    const SECTION_NAME = 'name';

    public function getSectionName()
    {
        return $this->get(self::SECTION_NAME);
    }

}