<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
    if(!empty($_POST)){
        $year=$_POST['year'];
        if($year==""){
            echo '你沒輸入年份';
        }else{
            if(is_numeric($year)){
                $year+=0;
                if(is_int($year)){
                    if($year<1){
                        echo '年份必須正整數';
                    }else{
                        if($year%4==0 && $year%100!=0 || $year%400==0){
                            echo "{$year}是閏年";
                        }else{
                            echo "{$year}是平年";
                        }
                    }
                }else{
                    echo '你輸入的不是整數';
                }
            }else{
                echo '你輸入的不是數字';
            }
        }
    }
?>
<form method="post" action="">
    請輸入年分:<input type="text" name="year"><br/>
    <input type="submit" name="button" value="判斷閏年">

</form>
</body>
</html>




