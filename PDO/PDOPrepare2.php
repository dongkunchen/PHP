<?php
//別名式預處理
//1.連接數據庫
try{
	$pdo = new PDO('mysql:host=localhost;dbname=test','username','password');
}catch (PDOException $e){
	die('數據庫連接失敗'.$e->getMessage());
}
//print_r($pdo);//測試是否成功

//2.預處理的sql語句(插入)
$sql = "insert into user(id,name,age) values(:id,:name ,:age)";
$stmt = $pdo->prepare($sql);

//3.對?號的參數綁定(第一種綁定方式)
//$stmt->bindValue("id",1006);
//$stmt->bindValue("name",'cheiba');
//$stmt->bindValue("age",23);

//3.對?號的參數綁定(第二種綁定方式)
//$stmt->bindParam("id",$id);
//$stmt->bindParam("name",$name);
//$stmt->bindParam("age",$age);
//$id = 1007;
//$name = 'cianjiou';
//$age = 16;

//3.對?號的參數綁定(第三種種綁定方式)
$stmt->execute(array('id'=>1008,'name'=>'chenshih','age'=>18));

//4.執行
//$stmt->execute();//前兩種綁定方法使用
echo $stmt->rowCount();//返回改變數量

