
<?php

$server   = "localhost";
$username = "root";
$password = "102003";
$database = "sysweb";


$mysqli = new mysqli($server, $username, $password, $database);


if ($mysqli->connect_error) {
    die('error'.$mysqli->connect_error);
}
?>
