<?php
 
require_once('global.php');

$host = $_ENV['db_host'];
$user = $_ENV['db_user'];
$password = $_ENV['db_password'];
$db_name = $_ENV['db_name'];

$con = mysqli_connect($host, $user, $password, $db_name);
if (!$con) {
  die('Could not connect: ' . mysqli_error($con));
} else {
  echo 'Successful connection';
}

mysqli_close($con);

