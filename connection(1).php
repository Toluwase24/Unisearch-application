<?php

$dbhost = "127.0.0.1";
$dbuser = "root";
$dbpass = "";
$dbname = "sign-up;

// if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname, 3306))
// {

// 	die("Connection Error");
// }

if(!$con = new mysqli($dbhost,$dbuser,$dbpass,$dbname, 3306))
{

	die("Connection Error");
}
