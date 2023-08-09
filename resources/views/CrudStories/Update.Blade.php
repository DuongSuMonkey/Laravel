{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Edit user</h2>
    <form action="/update/{{ $user->id }}" method="POST">
        @csrf
        {{-- <label for="id">
            Id:
            <input type="text" name="id" value="{{ $user->Id }}">
            
        </label><br><br> --}}
        {{-- <label for="Name">
            Name:
            <input type="text" name="name" value="{{ $user->name }}">
        </label><br><br>
        <label for="Age">
            Age:
            <input type="text" name="age"value="{{ $user->age }}">
        </label><br><br>
        <label for="Sex">
            Sex:
            <input type="text" name="sex"value="{{ $user->sex }}">
        </label><br><br>
        <button type="submit">Edit user</button>
    </form>

</body>
</html> --}} 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Stories</title>
</head>
<body>
    <h2>Edit stories</h2>
    <form action="{{ $user->id }}" method="POST">
        @csrf
            Name:
            <input type="text" name="name"value="{{ $user->name }}">
        </label><br><br>
        <label for="author">
            Author:
            <input type="text" name="author"value="{{ $user->author }}">
        </label><br><br>
        <label for="genre">
            Genre:
            <input type="text" name="genre"value="{{ $user->genre }}">
        </label><br><br>
        <label for="status">
            Status:
            <input type="text" name="status"value="{{ $user->status }}">
        </label><br><br>
        <label for="content">
            Content:
            <input type="text" name="content"value="{{ $user->content }}">
        </label><br><br>
        <button type="submit">Edit stories</button>
    </form>

</body>
</html>
