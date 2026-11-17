<?php
$states="Mississippi Alabama Texas Massachusetts Kansas";
$stateList=[];
$state1=explode(" ",$states);
echo"Original States:<br>";
foreach($state1 as $i=>$value)
    print("STATE[$i]=$value");
foreach($state1 as $value){
    if(preg_match("/xas$/",$value))
        $stateList[0]=$value;
    if(preg_match('/^k.*s$/i',$value))
        $stateList[1]=$value;
    if(preg_match('/M.*s$/',$value))
        $stateList[2]=$value;
    if(preg_match('/a$/',$value))
        $stateList[3]=$value;


}
echo"Result:<br>";
for($i=0;$i<count($stateList);$i++){
    print"STATE[$i]=$stateList[$i]";
}
?>

