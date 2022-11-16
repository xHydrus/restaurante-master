<?php 

$serverName = "localhost";
$dbUsername = "root";
$dbpassword = "";
$dbName = "restaurant";

$conn = mysqli_connect($serverName, $dbUsername, $dbpassword, $dbName);

if(!$conn){ //se for falso(!)
    die("Conexão falhada:" . mysqli_connect_error());

}