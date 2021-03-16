<?php 
include "db.php";
$sql = "select * from admin";
$res = mysqli_query($db,$sql);
$count = mysqli_num_rows($res);
header('Content-Type:application/json');
if($count>0){
   while($row = mysqli_fetch_assoc($res)){
        $arr[] = $row;  
   }
   echo json_encode($arr);
}

?>