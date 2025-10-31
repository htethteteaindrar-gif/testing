<?php
$email='hello';
if(filter_var($email,FILTER_VALIDATE_EMAIL)){
    echo "yes it is";
} else{
    echo "no it is not";
}