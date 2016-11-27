<?php

namespace App\Services\Validation;

class LessonValidator extends Validator {
    static  $rules = [
        'title' => 'required',
        'body' => 'required',
        'video_src' => 'required',
        'name.*' => 'required',
    ];
}