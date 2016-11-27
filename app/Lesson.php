<?php

namespace App;

use Eloquent;

class Lesson extends Eloquent
{
    protected $guarded = array();

    protected static $rules = array();

    protected $table = 'lessons';

    protected $fillable = ['title', 'body', 'video_src'];
}
