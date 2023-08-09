
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Page</title>
</head>
<body>
    <h2>Create Page</h2>
    <form action="" method="POST">
        @csrf
         <label for="id">
            Id:
            <input type="text" name="id">
            
        </label><br><br>
        <label for="story_id">
            Story id:
            <input type="text" name="story_id">
        </label><br><br>
        <label for="name">
            Name:
            <input type="text" name="name">
        </label><br><br>
        <label for="title">
            Title:
            <input type="text" name="title">
        </label><br><br>
        <label for="background_url">
            Background url:
            <input type="text" name="background_url">
        </label><br><br>
        <label for="content">
            Content:
            <input type="text" name="content">
        </label><br><br>
        <button type="submit">Create Page</button>
    </form>
</body>
</html>