<?php
session_start();
/*

    There will be validation ...

*/

include('../config/Connect_db.php');

$name = mysqli_real_escape_string($db, $_POST['name']);
$last_name = mysqli_real_escape_string($db, $_POST['last_name']);
$email = mysqli_real_escape_string($db, $_POST['email']);
$password = mysqli_real_escape_string($db, $_POST['password']);

$select_reg = "SELECT * FROM registration";
$result_select_reg = $db -> query($select_reg);
$rows = mysqli_num_rows($result_select_reg);

$insert_reg = "INSERT INTO registration (`id`,`name`,`last_name`,`email`,`password`) VALUES ('$rows','$name','$last_name','$email','$password')";
$db -> query($insert_reg);

$_SESSION['token'] = $rows;

header("location: ../user/index.php/id$rows");
?>