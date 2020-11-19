<?php

$connect = mysqli_connect("127.0.0.1", "root", "", "restapp");
if($connect) {
    echo 'Connection successfuly!';
} else {
    exit('Connection failed!'.mysqli_connect_error());
}