<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read Audios</title>
</head>
<body>
    <h2>List audios</h2>
    <table border="1">
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>File name</td>
            <td>Page Id</td>
        </tr>
        @foreach($audios as $audio)
            <tr>
                
                <td>{{ $audio->id }}</td>
                <td>{{ $audio->name }}</td>
                <td>{{  $audio->file_name}}</td>
                <td>{{  $audio->page_id }}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>
