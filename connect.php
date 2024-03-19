<?php
$connection = new mysqli('localhost','root','','crud-operation');

if(!$connection){
    die(mysqli_error($connection));
}
?>