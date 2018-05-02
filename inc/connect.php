<?php
// Set to localhost. Replace with your database info.
// The only table required for this project is one titled 'account' with 3 columns 'id', 'username', and 'password'

$dbserver = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "ra323679";
$conn = mysqli_connect("$dbserver","$dbuser","$dbpass","$dbname") or die(mysqli_error());

?>