<?php

$host = "localhost";
$user = "root";
$password = "";
$db = "USER1";

$link = mysqli_connect($host,$user,$password);
mysqli_select_db($link,$db);

if(!$link)
{
    echo "Error connection";
}

$uname = $_POST['username'];
$pass = $_POST['password'];
$email = $_POST['email'];
$pass = md5($pass);

$query = "INSERT INTO `USER_INFO` (`id`, `email`, `username`, `pass_word`, `registration_date`, `last_login_date`) VALUES ('','{$email}','{$uname}','{$pass}',NOW(),NOW())";
if(mysqli_query($link ,$query)===FALSE)
{
    echo "Error in adding record\n";
}
mysqli_close($link);
// header("Location : login.html");
// exit();

?>