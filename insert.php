<?php
 include("db.php");
 $sql="insert into student(name,age,sex)value('','','')";
 $db->query($sql);
if($db->affected_rows==1){
    echo 1;
}else{
    echo 0;
}