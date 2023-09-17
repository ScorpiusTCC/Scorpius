<?php
 
require_once('global.php');

$host = $_ENV['db_host'];
$user = $_ENV['db_user'];
$pass = $_ENV['db_password'];
$db_name = $_ENV['db_name'];


try {
  $conn = new PDO("mysql:host=$host;dbname=$db_name", $user, $pass);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
  echo "Conexão bem sucedida";
} catch (PDOException $e) {
  die("Erro na conexão com o banco de dados: " . $e->getMessage());
  }
