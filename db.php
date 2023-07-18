<?php
$servername = "localhost";
$username = "root";
$password = "AnnaBog2106";
$dbname = "registerUser";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if(!$conn){
    die("Connection Fialed". mysqli_connect_error());
}
?>