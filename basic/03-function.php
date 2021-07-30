<?php
function createPerson($name,$age,$sex='男'){
    echo '姓名:'.$name.'<br/>';
    echo '年齡:'.$age.'<br/>';
    echo '性別:'.$sex.'<br/>';
}
createPerson('zhang',18);
createPerson('lixi',18);
createPerson('wangwu',18,'女');

?>
