<?php
if (isset($_POST['submit'])){
    $a=$_POST['num1'];
    $b=$_POST['num2'];
    $op=$_POST['submit'];
    if(is_numeric($a) && is_numeric($b)){
        switch($op){
            case '+': $res=$a+$b;break;
            case '-': $res=$a-$b;break;
            case '*': $res=$a*$b;break;
            case '/': $res=$a/$b;break;
        }
    }
    else{
        echo"<script type='text/javascript>
        alert("Enter a Valid Number");
        </script>"
        }
}
?>
<html>
    <body>
        <form action=" " method="post">
            <caption><h2> SIMPLE CALCULATOR </h2></caption>
            <table border=2>
                <tr>
                    <td>First Number:</td>
                    <td>input type="text" name="num1" value="<?php if (isset($a)) echo $a;?>"
</td>
    <td>Second Number:</td>
    <td>input type="text" name="num2" value="<?php if isset($b) exho $b;?>"
</td>
</tr>
<td>RESULT</td>
<td colspan="3"><input type="text" name="res" value="<?php if (isset($res)) echo $res;?>"/>
</td>
</tr>
<tr>
</td><input type="submit" name="submit" value="+"/></td>
</td><input type="submit" name="submit" value="-"/></td>
</td><input type="submit" name="submit" value="*"/></td>
</td><input type="submit" name="submit" value="/"/></td>
</tr>
</form>
</body>
</html>