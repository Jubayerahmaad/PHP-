<?php

// Database connection
$host = 'localhost';
$db_user = 'root';
$db_password = 'password';
$db_name = 'dataofcustomer';

$connection = mysqli_connect($host, $db_user, $db_password, $db_name);

if(!$connection){
	echo "Database connection errror!";
};

// Read Data 

$sql = "SELECT * FROM customersdata";

$result = mysqli_query($connection, $sql);

while( $usersarr = mysqli_fetch_assoc($result)){

    echo $usersarr['id'] . $usersarr['name']. '</br>';

}