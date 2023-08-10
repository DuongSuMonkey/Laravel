<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Story</title>
</head>
<body>
    <h2>Create Story</h2>
    <form action="" method="POST">
        @csrf
         {{-- <label for="id">
            Id:
            <input type="text" name="id">
        </label><br><br> --}}
        <label for="name">
            Name:
            <input type="text" name="name">
        </label><br><br>
        <label for="author">
            Author:
            <input type="text" name="author">
        </label><br><br>
        <label for="genre">
            Genre:
            <input type="text" name="genre">
        </label><br><br>
        <label for="status">
            Status:
            <input type="text" name="status">
        </label><br><br>
        <label for="content">
            Content:
            <input type="text" name="content">
        </label><br><br>
        <button type="submit">Create stories</button>
    </form>
</body>
</html>