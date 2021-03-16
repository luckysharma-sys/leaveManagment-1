<?php

if(!isset($_SESSION['uname'])){
header('location: ../index.html');
}

include '../dbsystem/db.php';
$name = $_SESSION['uname'];
$qry = "SELECT * FROM `admin` WHERE `name` = '$name' ";
$chk = mysqli_query($db,$qry) or die("oops");
$data = mysqli_fetch_assoc($chk);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <!-- <table style=" border: 2px solid black; ">
        <tr>
            <td>name</td>
            <td>password</td>
            <td>emailid</td>
        </tr>
        <tr>
            <td><?php echo ($data['name']) ?></td>
            <td><?php echo($data['password']) ?></td>
            <td><?php echo($data['emailid']) ?></td>
        </tr>
    </table> -->
    <div class="card">
    <div class="card-body text-center">
        <p class="card-text"><?php echo ($data['name']) ?></p>
        <p class="card-text"><?php echo($data['password']) ?></p>
        <p class="card-text"><?php echo($data['emailid']) ?></p>
    </div>
    </div>
</body>
</html>