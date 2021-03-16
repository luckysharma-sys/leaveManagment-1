<h1>login status</h1>
<?php
session_start();

include "../dbsystem/db.php";
if(!isset($_SESSION['uname']))
{
$name = $_REQUEST["name"];
$email = $_REQUEST["email"];
$password = $_REQUEST["password"];
$_SESSION['uname'] = $name;
$_SESSION['password'] = $password;
$_SESSION['email'] = $email;
// $qry = "SELECT `name`, `password`, `emailid` FROM `admin` WHERE $_"
$qry = "SELECT * FROM `admin` WHERE `name` = '$name' AND `emailid` = '$email' AND`password` = '$password'";
$chk = mysqli_query($db,$qry) or die("oops");
$data = mysqli_fetch_assoc($chk);
if ($name == $data['name'] && $password == $data['password'] && $email = $data["emailid"])
{
header('Location: main.php');
}

}

else
echo "please signUp first <br>";
echo "<p>go back for<a href='../html/signup.html'> signUp </a> or <a href='../html/login.html'> login </a></p>";
?>