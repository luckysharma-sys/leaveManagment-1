<?php

if(!isset($_SESSION['uname'])){
header('location: ../index.html');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
      integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="../../css/main.css?v=<?php echo time();?>">
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
      crossorigin="anonymous"
    ></script>

<!-- 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->
    
</head>
<body>
<div id="nav">

    <ul>
        <li>
            <div class="dropdown">
                    <img data-toggle="dropdown" src="https://cdn1.iconfinder.com/data/icons/website-internet/48/website_-_male_user-512.png" alt="Avatar" id="avatar">
                <div class="dropdown-menu" style="text-align: center; width:300px;">
                        <a>profile</a>
                        <div class="dropdown-divider" ></div>
                        <a class="dropdown-item" href="#"><?php
                            echo $_SESSION['uname']."</br> ";
                            echo $_SESSION['email'];
                        ?></a>
                        <form action="../php/content/contentItem.php">
                        <input type="submit" value="view profile" name="profile"><br>
                        </form>
                </div>
            </div>   
        </li>

        <li class="dropdown"><i class="fas fa-bars fa-lg" data-toggle="dropdown"></i>
            <div class="dropdown-menu" style="text-align: center;">
                <a>Dashbord</a>
            <div class="dropdown-divider" ></div>
                <a class="dropdown-item" href="#">Link 1</a>
                <a class="dropdown-item" href="#">Link 2</a>
                <a class="dropdown-item" href="#">Link 3</a>
            </div>
        </li>

        <li class="dropdown"><i class="fas fa-camera fa-lg" data-toggle="dropdown"></i>
            <div class="dropdown-menu"  style="text-align: center;">
                <a>camera</a>
            <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Link 1</a>
                <a class="dropdown-item" href="#">Link 2</a>
                <a class="dropdown-item" href="#">Link 3</a>
            </div>
        </li>

        <li class="dropdown"><i class="fas fa-bookmark fa-lg" data-toggle="dropdown"></i>
            <div class="dropdown-menu"  style="text-align: center;">
                <a>Departmet</a>
            <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Link 1</a>
                <a class="dropdown-item" href="#">Link 2</a>
                <a class="dropdown-item" href="#">Link 3</a>
            </div>
        </li>

        <li class="dropdown"><i class="fas fa-file fa-lg" data-toggle="dropdown"></i>
            <div class="dropdown-menu"  style="text-align: center;">
                <a>file</a>
            <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Link 1</a>
                <a class="dropdown-item" href="#">Link 2</a>
                <a class="dropdown-item" href="#">Link 3</a>
            </div>
        </li>

        <li class="dropdown" style= " height: 500%;"><i class="fas fa-file fa-lg" data-toggle="dropdown"></i>
            <div class="dropdown-menu" >
            <form action="" method="post">
                  <button name="logout" type="submit" class="btn btn-primary" style="position: relative; border: 1px solid black; left:25%">LogOut</button>
                </form>
            </div>
        </li>
      
    </ul>
</div>
</body>
</html>