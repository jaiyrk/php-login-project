<?php

$username = $_POST['username'];
$password = $_POST['password'];

if($username == "admin" && $password == "password")
{
    echo "Login Successful";
}
else
{
    echo "Login Failed";
}

?>