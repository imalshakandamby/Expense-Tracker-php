<?php 
$_SESSION['host']="localhost";
$_SESSION['username']="root";
$_SESSION['password']="";
$_SESSION['database']="dhh_accountdb";

$unicand= mysqli_connect($_SESSION['host'], $_SESSION['username'], $_SESSION['password'], $_SESSION['database']);
if (!$unicand) {
     echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL; 
    exit;
}
?>