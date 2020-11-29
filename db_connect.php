<?php
$conn = mysqli_connect('localhost','root','','demo-db');
if (!$conn){
    die("Database Connection Failed" . mysqli_error($conn));
}
$select_db = mysqli_select_db($conn, 'demo-db');
if (!$select_db){
    die("Database Selection Failed" . mysqli_error($conn));
}