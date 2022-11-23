<?php
$username = $_POST['username'];
$password = $_POST['password'];

if (($username == "Test") && ($password == "123"))
{
    echo "Hello user $username";
}
else
{
    echo "Ivalid username and password... Please try again";
}





?>