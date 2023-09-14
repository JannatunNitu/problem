
<?php

$dbHostname = 'localhost';
$dbUserName = 'root';
$dbPassword = '';
$dbName = 'todo';

$conn = mysqli_connect($dbHostname,$dbUserName,$dbPassword,$dbName );

if($conn){
    echo "connected";
}