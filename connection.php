<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "phpcrud";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if($conn)
{
// echo "Connection is OK";
}
else
{
die("Connection failed because ".mysqli_connect_error());
}

?>