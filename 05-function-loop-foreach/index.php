<?php
// Function
// Loop 
// For Each Loop

function sayHello(){
    return 'Hi There <br>';
}

sayHello();


// Loop 

for($i = 0 ; $i < 10 ; $i++){
    echo $i ." ". sayHello();
}

// For Each Loop 

$languages = ['HTML' ,'CSS' , 'JAVASCRIPT'];

foreach( $languages as $item){
    echo $item . '<br>';
}

// Function With Argument 

function sayGoodMorging($name){
    echo 'Good Morning,' . " " . $name;

}
sayGoodMorging('Abdullah');

// FOOR LOOP If Else


?>