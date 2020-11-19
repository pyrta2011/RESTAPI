<?php

require "connect.php";

$posts = mysqli_query($connect, "SELECT * FROM `posts`");
$allposts = [];

while ($post = mysqli_fetch_assoc($posts)) {
    $allposts[] = $post;
}

print_r($allposts);
