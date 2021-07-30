<?php
//預處理
//1.連接數據庫
try{
	$pdo = new PDO('mysql:host=localhost;dbname=test',"username","password");
}catch (PDOException $e){
	die('數據庫連接失敗'.$e->getMessage());
}
//print_r($pdo);//測試是否成功

//2.預處理的sql語句(查詢)
$sql = "select id,name,age from user";
$stmt = $pdo->prepare($sql);

//3.執行
$stmt->execute();
//foreach ($stmt as $row){
//	echo $row['id'].'---'.$row['name'].'---'.$row['age'].'<br>';
//}
//用預處理方式
$stmt->bindColumn(1,$id);
$stmt->bindColumn(2,$name);
$stmt->bindColumn(3,$age);

while ($row=$stmt->fetch(PDO::FETCH_COLUMN)){
	echo "{$id}:{$name}:{$age}<br>";//這裡要用雙冒號
}

