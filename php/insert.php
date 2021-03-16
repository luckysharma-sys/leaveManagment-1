<?php

include "../dbsystem/db.php";

$name = $_REQUEST["name"];
$id = $_REQUEST["id"];
$password = $_REQUEST["set_password"];
$email = $_REQUEST["Email"];


$qry = "INSERT INTO `admin` (`emailid`, `id`, `name`, `password`) VALUES ('$email', '$id', '$name', '$password');";
$insert = mysqli_query($db,$qry);

if ($insert)
{
    ?>
    <script>
        alert("signUp sucess please login");
        window.open("login.php","_self");
    </script>
    <?php
}
else
echo "fail to signUP <a>signUp</a> again";
?>