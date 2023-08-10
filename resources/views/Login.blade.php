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
    <form action="protected-route" method="POST">
        @csrf
         <label for="taikhoan">
            Tai khoan:
            <input type="text" name="taikhoan">
            @error('id')
                id khong hop le
                <?php
                Log::channel('abuse')->info('id khong hop le',[
            1])
            ?>
            @enderror
        </label><br><br>
        <label for="Password">
            Password:
            <input type="text" name="Password">
            @error('Password')
            Password khong hop le
            <?php
            Log::channel('abuse')->info(' Password khong hop le',[
        1])
        ?>
            @enderror
        </label><br><br>
        <button type="submit">Login</button>
    </form>
</body>
</html>