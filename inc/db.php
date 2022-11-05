<?php

$conn = mysqli_connect('localhost','root','','test');

if(!$conn){
    echo 'Error: ' . mysqli_connect_error();
}