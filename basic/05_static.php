<?php
function demo(){
    static $a = 1;
    echo  $a.'<br/>';
    $a++;
}

demo();
demo();
demo();
$a = 100;//無法更改
demo();//4