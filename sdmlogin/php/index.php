<?php

$con = mysqli_connect('localhost', 'root', '', 'sdm');


$Name = $_POST['name'];
$Usn = $_POST['usn'];
$Number = $_POST['number'];
$Age = $_POST['age'];
$Mail = $_POST['mail'];
$Add = $_POST['address'];

$s = " insert into student values ('$Name','$Usn','$Number','$Age', '$Mail','$Add') ";


$result = mysqli_query($con, $s);

echo "Successfully entered";


?>