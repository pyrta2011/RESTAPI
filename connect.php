<?php

$connect = mysqli_connect("localhost", "f0488505_rest", "ft89yrwq", "f0488505_rest");
if($connect) {

} else {
    exit('Connection failed!' . mysqli_connect_error());
}