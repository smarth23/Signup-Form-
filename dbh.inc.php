<?php

$dbServername = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName= 'formdata';

$link =mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);
mysqli_select_db($link, $dbName);