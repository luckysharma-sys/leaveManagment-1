<?php

if(!isset($_SESSION['uname'])){

    $status = $_REQUEST['profile'];

    switch($status){
        case "view profile":
            include "../profile.php";
            header('Location: ../main.php');
            break;
        default:
            echo " ";
        }
}
    
?>