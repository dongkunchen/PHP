<?php
//1.連接數據庫
try{
	$pdo = new PDO('mysql:host=localhost;dbname=test',"username","password");
}catch (PDOException $e){
	die('數據庫連接失敗'.$e->getMessage());
}
//2.執行query查詢
	$sql = "select * from user";
	$stmt = $pdo->query($sql);
	//$list = $stmt->fetchAll();
	$list = $stmt->fetchAll(PDO::FETCH_ASSOC);
	//print_r($list);
//3.解析數據
foreach ($list as $val){
	echo $val['id'].'-------'.$val['name'].'-------'.$val['age'].'<br>';
}
//4.始放資源
$stmt = null;
$pdo = null;