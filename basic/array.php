<?php
$cars = array("Volvo","BMW","Toyota");
$age = array("zhangsan"=>"40","lisi"=>"41");

echo $cars[0];

var_dump($cars);

for($i=0;$i<count($cars);$i++)
{
	//echo $cars[$i].'<br>';
	var_dump($cars[$i]);
}

var_dump($age);

foreach($age as $key => $value)
{
	var_dump($key.'----------'.$value);
}

?>