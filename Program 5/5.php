<?php
$f=fopen("counter.txt","r");
$count=fread($f,filesize("counter.txt"));
echo"no of visitors are $count <br>";
fclose($f);
$count=$count+1
$f=$fopen("counter.txt","w");
fwrite($f,$count);
fclose($f);
?>

