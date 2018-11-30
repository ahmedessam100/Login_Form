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
if(isset($_POST['email'])){
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $pass_encrypted = md5($pass);

$query = "SELECT * FROM `USER_INFO` WHERE `email` = '{$email}' AND `pass_word`='{$pass_encrypted}' LIMIT 1";
$result_set = mysqli_query($link ,$query);
if(mysqli_num_rows($result_set) > 0)
{
    while($row = mysqli_fetch_assoc($result_set)) {
        echo "Hello, " . $row["username"]."!";
    }
    $query = "UPDATE `USER_INFO` SET `last_login_date`=NOW() WHERE `email` = '{$email}' AND `pass_word`='{$pass_encrypted}' ";
    mysqli_query($link ,$query);
}
else 
{
    echo "0 results";
}

mysqli_close($link);
}
?>