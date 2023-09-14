<?php
session_start();
include "./database/env.php";
$query = "SELECT * FROM lists";
$response = mysqli_query($conn,$query);
$post = mysqli_fetch_all($response,1);
var_dump ($post);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To Do List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
    <div class="todoList m-auto" style="border:1px solid #DDD; text-align:center; width:600px; " ;>
        <div class="heading">
            <h1 style="padding:20px 0 30px 0;" >PHP To Do List</h1>
        </div>
        <div class="form">
            <form action="./controller/post_sys.php" method ="post">
                <input name="value" type="text" placeholder="Enter something" style="width:200px; height:50px; border-radius:20px;">
                <button class="btn btn-success" type="submit" >Enter</button>
            </form>
            <table class="table" style="margin-top:20px;">
                <tr>
                    <td></td>
                    <td>
                        <button class="btn btn-success">Edit</button>
                    </td>
                    <td>
                        <button class="btn btn-danger">Delete</button>
                    </td>
                </tr>
            </table>
        </div>
    </div>
    
</body>
</html>