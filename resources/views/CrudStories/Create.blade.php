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
         <label for="id">
            Id:
            <input type="text" name="id">
            @error('id')
            ID không hợp lệ
            <?php
            Log::channel('abuse')->info('id khong hop le',[
        1])
        ?>
        @enderror
        </label><br><br>
        <label for="name">
            Name:
            <input type="text" name="name">
            @error('name')
            Name không hợp lệ
            <?php
            Log::channel('abuse')->info('name khong hop le',[
        1])
        ?>
        @enderror
        </label><br><br>
        <label for="author">
            Author:
            <input type="text" name="author">
            @error('author')
            Author không hợp lệ
            <?php
            Log::channel('abuse')->info('author khong hop le',[
        1])
        ?>
        @enderror
        </label><br><br>
        <label for="genre">
            Genre:
            <input type="text" name="genre">
            @error('genre')
            Genre không hợp lệ
            <?php
            Log::channel('abuse')->info('genre khong hop le',[
        1])
        ?>
        @enderror
        </label><br><br>
        <label for="status">
            Status:
            <input type="text" name="status">
            @error('status')
            Status không hợp lệ
            <?php
            Log::channel('abuse')->info('status khong hop le',[
        1])
        ?>
        @enderror
        </label><br><br>
        <label for="content">
            Content:
            <input type="text" name="content">
            @error('content')
            Content không hợp lệ
            <?php
            Log::channel('abuse')->info('content khong hop le',[
        1])
        ?>
        @enderror
        </label><br><br>
        <button type="submit">Create stories</button>
    </form>
</body>
</html>