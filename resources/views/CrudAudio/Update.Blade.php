
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update audio</title>
</head>
<body>
    <h2>Edit audio</h2>
    <form action="{{ $audio->id }}" method="POST">
        @csrf
            Name:
            <input type="text" name="name"value="{{ $audio->name }}">
        </label><br><br>
        <label for="file_name">
            File name:
            <input type="text" name="file_name"value="{{ $audio->file_name }}">
        </label><br><br>
        Page id:
        <input type="text" name="name"value="{{ $audio->page_id }}">
    </label><br><br>
        <button type="submit">Edit audio</button>
    </form>

</body>
</html>
