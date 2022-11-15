<?php
session_start();
include_once 'functions.php';

$_SESSION['errors'] = [];

function user_exists($uname){
    $users = ['alma', 'korte'];
    return array_search($_POST['uname'], $users);
}

if(!post_exists('uname')){
    $_SESSION['errors'][] = 'Username is empty!';
}else if(!user_exists($_POST['uname'])){
    $_SESSION['errors'][] = 'Username doesn\'t exist';
}

if(count($_SESSION['errors']) > 0){
    redirect('../auth.php');
}else{
    // login folyamat, hogy bejelentkezzünk
    redirect('../index.php');
}