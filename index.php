<?php

header('Content-Type: application/json');
require "connect.php";
require "function.php";

if ($_GET['q'] === 'posts') {
    getPosts($connect);    
}


