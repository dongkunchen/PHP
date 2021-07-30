<?php
//1.連接數據庫
try {
	$pdo = new PDO('mysql:host=localhost;dbname=test',"username","password");
}catch (PDOException $e){
	die('數據庫連接失敗'.$e->getMessage());
}

//2.執行query查詢
$sql = 'select * from user';
foreach ($pdo->query($sql) as $val){
	echo $val['id'].'-------'.$val['name'].'-------'.$val['age'].'<br>';
}

//3.執行插入語句
//$sql = "insert into user values(1003,'wangwu',24)";
//$res = $pdo->exec($sql);
//if($res){
//	echo 'success';
//}

//4.執行刪除語句
//$sql = "delete from user where id=1003";
//$res = $pdo->exec($sql);
//if($res){
//	echo 'success';
//}

//5.執行修改語句
//$sql = "update user set age=18 where id=1002";
//$res = $pdo->exec($sql);
//if($res){
//	echo 'success';
//}