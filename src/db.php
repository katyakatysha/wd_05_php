<?php

$connection = mysqli_connect('localhost', 'root','root', 'wd05');
//var_dump(mysqli_error($connection));
//var_dump(mysqli_errno($connection));
if (!$connection){
    echo "Error:". mysqli_error();
}
?>