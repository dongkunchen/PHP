<?php
//採用預處理+事務處理執行SQL操作
//1.連接數據庫
try{
	$pdo = new PDO("mysql:host=localhost;dbname=test","username","password");
	//設置報錯模式
	$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}catch (PDOException $e){
	die("數據庫連接失敗".$e->getMessage());
}
//print_r($pdo);
//2.執行數據操作
try {
	//開啟事務
	$pdo->beginTransaction();
	$sql = "insert into user(id,name,age) values(?,?,?)";
	$stmt = $pdo->prepare($sql);
	//傳入參數
	$stmt->execute(array(1009,'linmei',24));

	//提交事務
	$pdo->commit();
}catch (PDOException $e){
	die("執行失敗".$e->getMessage());
	//回滾
	$pdo->rollBack();
}
