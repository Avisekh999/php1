<?php
include("config.php");

extract($_POST);
$query="INSERT INTO `contact-data` (`name`,`mobilenumber`,`email`,`subject`,`message`) VALUES ('".$name."','".$mobilenumber."','".$email."','".$subject."','".$message."')";
$result = $mysqli->query($query);
if(!$result){
    echo "Something went wrong".$mysqli->err;
}

echo "<center> <h1>Thank you for submitting your Query!<h2> </center>";
$mysqli->close();






?>