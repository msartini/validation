<?php

namespace App\Http\Controllers;

use View;
use Redirect;
use Illuminate\Http\Request;
use App\Lesson;
use App\Services\Validation\LessonValidator as Validator;

class LessonsController extends Controller
{
    protected $validator;

    public function __construct(Validator $validator)
    {
        $this->validator = $validator;
    }

    public function index()
    {
        return Lesson::paginate(1);
    }

    public function create()
    {
        return View::make('lessons.create');
    }

    public function store(Request $request)
    {
        if (! $this->validator->validate($request->all())) {

            return $this->validator->jsonErrors();

            return Redirect::back()->withErrors($this->validator->errors())->withInput();
        }

        Lesson::create($request->all());

        return Redirect::route('lessons.create');
    }
}
