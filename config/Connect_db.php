<?php
$db = @new mysqli("localhost","root","","user.loc");
if($db -> connect_error) {
    die();
} else {
    mysqli_set_charset($db,'utf8');
}
	