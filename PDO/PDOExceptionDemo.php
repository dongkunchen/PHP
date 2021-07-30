<?php

try {
	$pdo = new PDO('mysql:host=localhost;dbname=test','username','password');
	//第二種設置抱錯
	//$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
	//$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	//$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_SILENT);
	$pdo->setAttribute(PDO::ATTR_ERRMODE,0);
}catch (PDOException $e){
	die('數據庫連接失敗'.$e->getMessage());
}
//print_r($pdo);

//第一種報錯
//$sql = "insert into user values(1003,'wangwu',24)";
//$res = $pdo->exec($sql);
//if($res){
//	echo 'success';
//}else{
//	echo $pdo->errorCode();//默認不提示 要調用errorCode
//	print_r($pdo->errorInfo());//默認不提示 調用errorInfo(數組)
//}

//第三種插入失敗報錯(最常用)
$sql = "insert into user values(1003,'wangwu',24)";
try {
	$res = $pdo->exec($sql);
}catch (PDOException $e){
	echo $e->getMessage();
}

