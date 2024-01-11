<?php

session_start();

// *Get data
$title = $_REQUEST['title'];
$details = $_REQUEST['details'];
$author = $_REQUEST['author'];

// *Data Validation
$errors = [];
// *title
if( empty($title) ){
    $errors['title_error'] = "title na dile hobe bolo?";
}elseif( strlen($title) > 15){
    $errors['title_error'] = "title is too big for a human o robot";
}
// *Detail
if( empty($details) ){
    $errors['detail_error'] = "title dila but vitore purai faka whyyyyyy?";
}

// *if we have errros
if(count($errors) > 0){
    $_SESSION['old'] = $_REQUEST;
    $_SESSION['errors'] = $errors;
    // *redirection
    header("Location: ../index.php");
}

