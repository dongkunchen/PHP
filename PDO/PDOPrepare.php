<?php
//?號式預處理
//1.連接數據庫
try{
	$pdo = new PDO('mysql:host=localhost;dbname=test','username','password');
}catch (PDOException $e){
	die('數據庫連接失敗'.$e->getMessage());
}
//print_r($pdo);//測試是否成功

//2.預處理的sql語句(插入)
$sql = "insert into user(id,name,age) values(?,?,?)";
$stmt = $pdo->prepare($sql);

//3.對?號的參數綁定(第一種綁定方式)
//$stmt->bindValue(1,1003);
//$stmt->bindValue(2,'wangwu');
//$stmt->bindValue(3,24);

//3.對?號的參數綁定(第二種綁定方式)
//$stmt->bindParam(1,$id);
//$stmt->bindParam(2,$name);
//$stmt->bindParam(3,$age);
//$id = 1004;
//$name = 'zhaoliu';
//$age = 19;

//3.對?號的參數綁定(第三種種綁定方式)
$stmt->execute(array(1005,'tianchi',16));

//4.執行
//stmt->execute();//前兩種綁定方法使用
echo $stmt->rowCount();//返回改變數量

