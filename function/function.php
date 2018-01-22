<?php

//function to check if you are old enough to get into the club
function checkAge($age){
    if ($age >= '21'){
        echo "You are $age. Come on into the club";
    }else{
        echo "You are $age. You are too young come back later";
    }
}