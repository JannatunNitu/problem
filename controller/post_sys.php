<?php
session_start();

include "../database/env.php";
$values = $_REQUEST['value'];

$dbHostname = 'localhost';
$dbUserName = 'root';
$dbPassword = '';
$dbName = 'todo';

$conn = mysqli_connect($dbHostname,$dbUserName,$dbPassword,$dbName );

$query = "INSERT INTO lists(values) VALUES ('$values')";
$result = mysqli_query($conn,$query);
// $errors = [];

// if(empty($values)){
//     $errors['values_error'] = "Enter somthing";
// }
// else if(strlen($values) >10){
//     $errors['values_error'] = "Invalid value";
// }
// if(count($errors)>0){
//     $_SESSION['form_error'] = $errors;
//     header("location:../index.php");
// } else{
    
//     $query = "INSERT INTO lists(values) VALUES ('$values')";
//     $result = mysqli_query($conn,$query);
?>

