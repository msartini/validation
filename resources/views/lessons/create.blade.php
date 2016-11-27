<!DOCTYPE html>
<html>
<head>
    <title>Create Lesson</title>
</head>
<body>
    <h1>Create Lesson</h1>
    {{Form::open(array('route' => 'lessons.store'))}}
        <ul>
            <li>
                {{Form::label('title', 'Title:')}}
                {{Form::text('title')}}
            </li>

            <li>
                {{Form::label('body', 'Body:')}}
                {{Form::textarea('body')}}
            </li>

            <li>
                {{Form::label('video_src', 'Video src:')}}
                {{Form::text('video_src')}}
            </li>

            <li>
                <input type="text" name="name[]" />
            </li>

            <li>
                <input type="text" name="name[]" />
            </li>

            <li>
                {{Form::submit()}}
            </li>
        </ul>
    {{Form::close()}}

    <?php $combined = array_combine($errors->keys(), $errors->all()); ?>

    <ul class="errors">
        @foreach($combined as $key => $message)
            <li>{{$key}} {{ $message }}</li>
        @endforeach
    </ul>




</body>
</html>