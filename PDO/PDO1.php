<?php
//mysqli用法
//$mysqli = new mysqli("localhost","user","password","dbname");
try {
	//$pdo = new PDO("mysql:host=localhost;dbname=test","username","password");
	$pdo = new PDO("uri:mysqlPDO.ini","username","password");
	//第三種在php.ini [SQL] 加上pdo.dsn.mysqlpdo = "mysql:host=localhost;dbname=test"
	//$pdo = new PDO("mysqlpdo","username","password");
	$pdo->setAttribute(PDO::ATTR_AUTOCOMMIT,0);//改成不自動提交

}catch (PDOException $e){
	die("數據庫連接失敗".$e->getMessage());
}
echo $pdo->getAttribute(PDO::ATTR_CLIENT_VERSION).'<br>';
echo $pdo->getAttribute(PDO::ATTR_SERVER_INFO).'<br>';
echo $pdo->getAttribute(PDO::ATTR_AUTOCOMMIT).'<br>';//自動提交
print_r($pdo);