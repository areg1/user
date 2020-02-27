<?php
if( $_SERVER['HTTPS'] == '' ) {
    $domain = 'http://';
} else {
    $domain = 'https://';
}
$domain .= $_SERVER['SERVER_NAME'];
