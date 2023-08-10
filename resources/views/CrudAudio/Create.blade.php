
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create audio</title>
</head>
<body>
    <h2>Create audio</h2>
    <form action="" method="POST">
        @csrf
         <label for="id">
            Id:
            <input type="text" name="id">
            
        </label><br><br>
        <label for="name">
            Name:
            <input type="text" name="name">
        </label><br><br>
        <label for="file_name">
            File name:
            <input type="text" name="file_name">
        </label><br><br>
        <label for="page_id">
           Page_id:
            <input type="text" name="page_id">
        </label><br><br>
        <button type="submit">Create audio</button>
    </form>
</body>
</html>