
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
    <form action="{{ $story->id }}" method="POST">
        @csrf
            Name:
            <input type="text" name="name"value="{{ $story->name }}">
            @error('name')
            Name không hợp lệ
            <?php
            Log::channel('abuse')->info('Name khong hop le',[
        1])
        ?>
        @enderror
        </label><br><br>
        <label for="author">
            Author:
            <input type="text" name="author"value="{{ $story->author }}">
            @error('author')
            Author không hợp lệ
            <?php
            Log::channel('abuse')->info('Author khong hop le',[
        1])
        ?>
        @enderror
        </label><br><br>
        <label for="genre">
            Genre:
            <input type="text" name="genre"value="{{ $story->genre }}">
            @error('genre')
            Genre không hợp lệ
            <?php
            Log::channel('abuse')->info('Genre khong hop le',[
        1])
        ?>
        @enderror
        </label><br><br>
        <label for="status">
            Status:
            <input type="text" name="status"value="{{ $story->status }}">
            @error('status')
            Status không hợp lệ
            <?php
            Log::channel('abuse')->info('Status khong hop le',[
        1])
        ?>
        @enderror
        </label><br><br>
        <label for="content">
            Content:
            <input type="text" name="content"value="{{ $story->content }}">
            @error('content')
            Content không hợp lệ
            <?php
            Log::channel('abuse')->info('Content khong hop le',[
        1])
        ?>
        @enderror
        </label><br><br>
        <button type="submit">Edit stories</button>
    </form>

</body>
</html>
