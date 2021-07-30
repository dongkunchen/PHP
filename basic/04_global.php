<?php
$str='dongkun';
function demo(){
    global $str;//不能直接從新賦直
    echo $str;
    $str = 'yamei';
}
demo();
echo $str.'<br/>';

function demo1(){
    $name = 'yichen';
    echo $name;//global前可以正常
    global $name;
    var_dump($name);//global後調用變成空值
}
demo1();

function demo2(){
    var_dump($GLOBALS);
}
demo2();

?>
