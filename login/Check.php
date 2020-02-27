<?php
session_start();
include_once('../config/Connect_db.php');

$email = mysqli_real_escape_string($db, $_POST['email']);
$password = mysqli_real_escape_string($db, $_POST['password']);

$select = "SELECT * FROM registration WHERE `email`='$email'";
$result_select = $db -> query($select);
$result_select = mysqli_fetch_assoc($result_select);
$db_password = $result_select['password'];
$id = $result_select['id'];

if( $password != '' && $password == $db_password ) {
    $_SESSION['token'] = $id;
    header("location: ../user/index.php/id$id");
} else {
    header('location: index.php');
}
?>