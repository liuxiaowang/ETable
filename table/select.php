<?php
include "db.php";
$sql="select * from student";
$result=$db->query($sql);
$r=$result->fetch_all(MYSQLI_ASSOC);
echo json_encode($r);  //将对象转换成字符串