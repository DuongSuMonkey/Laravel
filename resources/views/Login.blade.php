<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Login</h2>
    <form action="api/protected-route" method="POST">
        @csrf
         <label for="taikhoan">
            Tai khoan:
            <input type="text" name="taikhoan">
        </label><br><br>
        <label for="Password">
            Password:
            <input type="text" name="Password">
        </label><br><br>
        <button type="submit">Login</button>
    </form>
</body>
</html>