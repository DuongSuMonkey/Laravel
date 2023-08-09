<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read Stories</title>
</head>
<body>
    <h2>List users</h2>
    <table border="1">
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Author</td>
            <td>Genre</td>
            <td>Status</td>
            <td>Content</td>
        </tr>
        @foreach($users as $user)
            <tr>
                
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{  $user->author}}</td>
                <td>{{  $user->genre }}</td>
                <td>{{  $user->status }}</td>
                <td>{{  $user->content}}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>
