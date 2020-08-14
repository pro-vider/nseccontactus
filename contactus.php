<?php
$name=$_POST['name'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$connection=mysqli_connect('localhost','id12993232_handbook','handbook','id12993232_2108');
if (!$connection)
    die("connection failed");
$insert="INSERT INTO NSEC SET name='$name',phone='$phone', email='$email'";

$result=$connection->query($insert);

echo "Name :".$name.",mail is".$email.",mob no is".$phone ;
?>