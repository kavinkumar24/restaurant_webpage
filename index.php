<?php
$con=mysqli_connect('localhost','root','','akspice1')
$firstname = $_POST['fname'];
$lastname = $_POST['lname'];
$phone= $_POST['num'];
$address = $_POST['address'];
$email = $_POST['email'];
$your_food = $_POST['first_food'];

$sql= "INSERT INTO `orderfood`(`fname`, `lname`, `phone`, `address`, `email`, `first_food`) VALUES ('$firstname','$lastname','$phone','$address','$email','$your_food');"
$rs=mysqli_query($con,$sql);
if($rs)
{
    echo "inserted"
}
?>