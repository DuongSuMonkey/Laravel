
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update audio</title>
</head>
<body>
    <h2>Edit Page</h2>
    <form action="{{ $page->id }}" method="POST">
        @csrf
            Story id:
            <input type="text" name="story_id"value="{{ $page->story_id }}">
        </label><br><br>
        <label for="name">
            Name:
            <input type="text" name="name"value="{{ $page->name }}">
        </label><br><br>
        <label for="title">
            Title:
            <input type="text" name="title"value="{{ $page->title }}">
        </label><br><br>
        <label for="content">
            Content:
            <input type="text" name="content"value="{{ $page->content }}">
        </label><br><br>
        <button type="submit">Edit Page</button>
    </form>

</body>
</html>