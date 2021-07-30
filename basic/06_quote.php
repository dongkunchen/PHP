<?php

$num = 115;

function demo(&$num){
    $num += 5;
    echo $num;
}

demo($num);