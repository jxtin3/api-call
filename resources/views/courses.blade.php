<!DOCTYPE html>
<html>
<head>
    <title>Courses</title>
</head>
<body>
    <h1>Created Courses</h1>
    
    @if(count($courses) > 0)
        <ul>
            @foreach($courses as $course)
                <li>
                    <strong>ID:</strong> {{ $course->id }} <br>
                    <strong>Title:</strong> {{ $course->title }} <br>
                    <strong>Description:</strong> {{ $course->description }} <br>
                    <strong>Instructor:</strong> {{ $course->instructor }}
                </li>
                <br>
            @endforeach
        </ul>
    @else
        <p>No course found na. Create ka boiiii</p>
    @endif
</body>
</html>
