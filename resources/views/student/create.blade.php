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

    <form action="" method="post">
        @csrf
        <div>
            <label for="name">Name</label>
            <br>
            <input type="text" name="name" id="name">
        </div>
        <div>
            <label for="email">Email</label>
            <br>
            <input type="text" name="email" id="email">
        </div>
        <div>
            <label for="photo">Phote</label>
            <br>
            <input type="file" name="photo" id="photo">
        </div>
        <br>
        <button type="submit">Submit</button>
    </form>

</body>
</html>
