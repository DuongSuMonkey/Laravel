
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Stories</title>
</head>
<body>
    @isset($errors)
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endisset
    <h2>Edit stories</h2>
    <form action="{{ $story->id }}" method="POST">
        @csrf
        <label for="name">
            Name:
            <input type="text" name="name"value="{{ $story->name }}">
           {{-- @error('name')
           name khong hop le
            <?php
            Log::channel('abuse')->info('name khong hop le',[
        1])
        ?>
        @enderror --}}
        </label><br><br>
        <label for="author">
            Author:
            <input type="text" name="author"value="{{ $story->author }}">
        </label><br><br>
        <label for="genre">
            Genre:
            <input type="text" name="genre"value="{{ $story->genre }}">
        </label><br><br>
        <label for="status">
            Status:
            <input type="text" name="status"value="{{ $story->status }}">
        </label><br><br>
        <label for="content">
            Content:
            <input type="text" name="content"value="{{ $story->content }}">
        </label><br><br>
        <button type="submit">Edit stories</button>
    </form>

</body>
</html>
