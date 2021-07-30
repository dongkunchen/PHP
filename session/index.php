<?php

session_start();
//echo session_id();//可以顯示session id
$_SESSION['name'] = 'dongkun';

//session_destroy();//銷毀

header('location:a.php');
