<?php
/*
*This file is used for loading the classes only
*These classes are used for the post managing system
*
**/
// classes loading
require_once('model/PostManager.php');
require_once('model/CommentManager.php');
require_once('model/UserManager.php');
//all functions management


function listPosts()
{
    $postManager = new \Devnetwork\Blog\Model\PostManager();
    $posts = $postManager->getPosts();

    require('views/listposts.view.php');
}

function accueil()
{
    $userManager = new \Devnetwork\Blog\Model\UserManager();
    require('views/index.view.php');
}

function liste()
{
    $userManager = new \Devnetwork\Blog\Model\UserManager();
    $users = $userManager->getListe();

    require('views/list_users.view.php');
}

function inscription()
{
    $userManager = new \Devnetwork\Blog\Model\UserManager();

    require('views/register.view.php');
}

function logintheUser()
{
    $userManager = new \Devnetwork\Blog\Model\UserManager();
    $userHasBeenFound = $userManager->loginUser($_POST['identifiant'], $_POST['password']);

    require('views/login.view.php');
}

function login()
{
    $userManager = new \Devnetwork\Blog\Model\UserManager();

    require('views/login.view.php');
}

function post()
{
    $postManager = new \Devnetwork\Blog\Model\PostManager();
    $commentManager = new \Devnetwork\Blog\Model\CommentManager();

    $post = $postManager->getPost($_GET['id']);
    $comments = $commentManager->getComments($_GET['id']);

    require('views/post.view.php');
}

function profile()
{
    $userManager = new \Devnetwork\Blog\Model\UserManager();
    $profile = $userManager->getProfile($_GET['id']);

    require('views/profile.view.php');
}

function modifier()
{
    $postManager = new \Devnetwork\Blog\Model\PostManager();

    $post = $postManager->getPost($_GET['id']);

    require('views/modifier.view.php');
}

function delete()
{
    $postManager = new \Devnetwork\Blog\Model\PostManager();
    $posts = $postManager->getPosts();

    require('views/listposts.view.php');
}

function change()
{
    $userManager = new \Devnetwork\Blog\Model\UserManager();

    $profile = $userManager->getProfile($_GET['id']);

    require('views/edit_user.view.php');
}
