<?php
include "db.php";
error_reporting(0);
$order=$_GET["order"];
$name=$_GET["name"];
if(isset($order)){
    $sql="select * from student order by age $order";  //order by 排序  asc 升序 desc 降序
}else if(isset($name)){
    $sql="select * from student where name like '%$name%' order by id";
}else{
    $sql="select * from student order by id asc";
}



$result=$db->query($sql);
$r=$result->fetch_all(MYSQLI_ASSOC);
echo json_encode($r);  //将对象转换成字符串