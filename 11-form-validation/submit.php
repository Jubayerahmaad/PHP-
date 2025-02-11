<?php

$has_error = false;
$errors = array();

// Request validation
$request_method = $_SERVER['REQUEST_METHOD'];

if('POST' != $request_method){
    $has_error = true;
    array_push(errors, 'Invalid Method!');
}


// Validate input feild


// Insert 
if($has_error){
    foreach($errors as $error){
        echo $error;

    }
