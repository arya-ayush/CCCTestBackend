<?php
/**
 * Created by PhpStorm.
 * User: ayush
 * Date: 28/7/18
 * Time: 4:37 PM
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    public function question()
    {
        return $this->hasMany(Question::class,'section_id','id');
    }
}