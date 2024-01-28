<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Student</title>
</head>
<body>
    <ul>
        <li><a href={{ route('student.index') }}>Student List</a></li>
        <li><a href={{ route('student.create') }}>Create Student</a></li>
    </ul>

    <br>
    <br>

    @if (session('success'))
        <p style="color: green">{{ session('success') }}</p>
    @endif

    <form action="{{route('student.update', $student->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div>
            <label for="name">Name</label>
            <br>
            <input type="text" name="name" id="name" value="{{ $student->name }}">
            <p style="color:red"><small>@error('name')
                {{ $message }}
            @enderror</small></p>
        </div>
        <div>
            <label for="email">Email</label>
            <br>
            <input type="text" name="email" id="email" value="{{ $student->email }}">
            <p style="color:red"><small>@error('email')
                {{ $message }}
            @enderror</small></p>
        </div>
        <div>
            <div>
                <img src="{{ asset('uploads/'.$student->photo) }}" alt="" width="300" height="300">
            </div>
            <label for="photo">Phote</label>
            <br>
            <input type="file" name="photo" id="photo">
            <p style="color:red"><small>@error('photo')
                {{ $message }}
            @enderror</small></p>
        </div>
        <br>
        <button type="submit">Update</button>
    </form>

</body>
</html>
