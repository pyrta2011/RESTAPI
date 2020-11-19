<?php
header("Content-type: json/application");
require "connect.php";

$posts = mysqli_query($connect, "SELECT * FROM `posts`");
$allposts = [];

while ($post = mysqli_fetch_assoc($posts)) {
    $allposts[] = $post;
}

echo json_encode($allposts);
