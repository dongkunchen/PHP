<?php


//print_r($_FILES);//查看upload.html返回數組
$file = $_FILES['file'];//整個$_FILES數組
$fileName = $file['name'];//name檔名 tmp_name檔案來源路徑
move_uploaded_file($file['tmp_name'],$fileName);

echo "<img src='$fileName'>";