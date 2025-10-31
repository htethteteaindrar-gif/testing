<?php
function redirect($path){
    //test.php index.php
    header("Location:{$path}");
}
redirect('');