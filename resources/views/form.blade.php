<form method ="POST" action ="/home">
    <div>
        <input type ="text" name ="username" placeholder ="Nhap ten user....."/>
        <input type ="hidden" name ="_method" value="GET"/>
        <input type ="hidden" name ="_token" value="<?php echo csrf_token();?>"/>

    </div>
    <button type="submit">Submit</button>
</form>