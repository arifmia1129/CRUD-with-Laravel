<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student Details</title>
</head>
<body>
    <ul>
        <li><a href={{ route('student.index') }}>Student List</a></li>
        <li><a href={{ route('student.create') }}>Create Student</a></li>
    </ul>

<h1>Student Details Here</h1>
<img src="{{ asset('uploads/'.$student->photo) }}" alt="" style="width: 200px;height: 200px;">
<p>{{ $student->name }}</p>
<p>{{ $student->email }}</p>
</body>
</html>
