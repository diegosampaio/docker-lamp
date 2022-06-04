<?php
$host = "mysql-server";
$user = "root";
$pass = "root";
$db = "app1";

try {
  $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
  echo "Conectado com sucesso!";
} catch (PDOException $e) {
  echo "Erro na conexão: " . $e->getMessage();
}