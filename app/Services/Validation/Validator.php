<?php

namespace App\Services\Validation;

use Validator as V;

abstract class Validator {

    protected $errors;

    public function validate($request)
    {
        $validator = V::make($request, static::$rules);

        if ($validator->fails()) {
            $this->errors = $validator->messages();

            return false;
        }

        return true;
    }

    public function errors()
    {
        return $this->errors;
    }

    public function jsonErrors()
    {
        $combined = array_combine($this->errors->keys(), $this->errors->all());

        return json_encode($combined);
    }
}