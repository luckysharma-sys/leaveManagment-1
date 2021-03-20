<h1>login status</h1>
<?php
session_start();

include "../dbsystem/db.php";
if(!isset($_SESSION['uname']))
{
$name = $_REQUEST["name"];
$email = $_REQUEST["email"];
$password = $_REQUEST["password"];
$qry = "SELECT * FROM `admin` WHERE `name` = '$name' AND `emailid` = '$email' AND`password` = '$password'";
$chk = mysqli_query($db,$qry) or die("oops");
$data = mysqli_fetch_assoc($chk);
if ($name == $data['name'] && $password == $data['password'] && $email == $data["emailid"])
{
$_SESSION['uname'] = $name;
$_SESSION['password'] = $password;
$_SESSION['email'] = $email;
header('Location: main.php');
}
}
echo "please signUp first <br>";
echo "<p>go back for<a href='signup.php'> signUp </a> or <a href='login.php'> login </a></p>";
?>