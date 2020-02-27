<?php
session_start();

$request = $_SERVER['REQUEST_URI'];
$arr_request = explode('/', $request);
$full_id = end($arr_request);
$id = str_replace('id', '', $full_id);

if( $_SESSION['token'] != $id || $_SESSION['token'] == '' ) {
    header('location: '.$domain.'/login/index.php');
    die();
}
