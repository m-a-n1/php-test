<?php

function add($x, $y){
    return $x + $y;
}

echo add(5, 10);

function hello($x){
    $user = $x;

    if($user === "Nour"){
        echo "Hello " . $user;
    }else{
        echo "bye " . $user;
    }
}

hello("Nour");

?>