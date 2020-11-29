<?php
$name = $_GET['name'];
$emailaddress = $_GET['emailaddress'];
$password1 = $_GET['password1'];
$password2 = $_GET['password2'];
$dob_month =  $_GET['dob_month'];
$dob_day = $_GET['dob_day'];
$dob_year = $_GET['dob_year'];
if ($password1!=$password2){
    echo "Passwords are not identical";
}

else{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "demo-db";

 $conn = mysqli_connect($servername,$username,$password,$dbname);

    if ($conn == false){
        echo "Connection failed";
    }
    
    $sql = "INSERT INTO `user` (`name`, `emailaddress`, `password`, `dob_month`, `dob_day`, `dob_year`) VALUES ('$name', '$emailaddress', '$password1', '$dob_month', '$dob_day', '$dob_year')";
    echo $sql;
    if (mysqli_query($conn,$sql)){
        echo "Query successful";
    }
    else{
        echo "Query Failed";
    }
    mysqli_close($conn);    
    
}

?>