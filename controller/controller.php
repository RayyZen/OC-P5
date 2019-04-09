<?php

require_once('model/PostManager.php');

function listHomePosts(){

    $postManager = new PostManager();
    $posts = $postManager->getHomePosts();

    require('view/frontend/homeView.php');

}

function listAllPosts(){

    $postManager = new PostManager();
    $posts = $postManager->getAllPosts();

    require('view/frontend/listPostsView.php');

}