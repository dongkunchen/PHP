<?php

if(isset($_GET['name'])){
    echo 'Hello! '.$_GET['name'];
}else{
    echo '請輸入名字';
}

//if($_POST['a']&&$_POST('b')){
//    echo $_POST['a']+$_POST['b'];
//}else{
//    echo '請輸入參數';
//}