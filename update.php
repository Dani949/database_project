<?php
session_start();
include("db_connect.php");
if(isset($_POST['Submit']))
{
 $oldpass=md5($_POST['password1']);
 $useremail=md5($_POST['emailaddress']);
 $newpassword=md5($_POST['password2']);
$sql=mysqli_query($conn,"SELECT password FROM user where password='$oldpass' && emailaddress='$useremail'");
$num=mysqli_fetch_array($sql);
if($num>0)
{
 $conn=mysqli_query($conn,"update user set password=' $newpassword' where emailaddress='$useremail'");
 echo "Password Changed Successfully !!";
}
else
{
echo "Old Password not match !!";
}
}
?>