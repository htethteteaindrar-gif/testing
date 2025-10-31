<?php
function login ($user,$password){
    $d_user="elli";
    $d_password="123";
    if($user!==$d_user){
        throw new exception ("Wrong user");
    }
}
try {
    login('1ll','123');}
        catch (Exception $e){
            echo "<pre>";
          echo $e ->getLine();
        }
    