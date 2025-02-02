<?php

$servername = "localhost";
$username = "root";
$password = "";
$db_name = "user";

$conn = mysqli_connect($servername, $username, $password, $db_name);

if($conn){
    echo 'Database is Connected!';
};

// insert To Database 

$sql = "INSERT INTO users (name, email, password) VALUES ('Habib', 'Habib@gmail.com', 12345)";

$inser = mysqli_query($conn , $sql);

if(){
    echo 'Database Created!'
}