<?php

function getPosts($connect) {
    $posts = mysqli_query($connect, "SELECT * FROM `posts`");
    $allposts = [];

    while ($post = mysqli_fetch_assoc($posts)) {
        $allposts[] = $post;
    }
    
    echo json_encode($allposts);
}

function getPost($connect, $id) {
    $post = mysqli_query($connect, "SELECT * FROM `posts` WHERE `id` = '$id'");
    $post = mysqli_fetch_assoc($post);
    echo json_encode($post);
}