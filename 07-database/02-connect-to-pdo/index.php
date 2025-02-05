<?php
require_once __DIR__ . '/../../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../..');
$dotenv->load();

$host = $_ENV['DB_HOST'];
$port = $_ENV['DB_PORT'];
$dbname = $_ENV['DB_NAME'];
$username = $_ENV['DB_USERNAME'];
$password = $_ENV['DB_PASSWORD'];

$dsn = "mysql:host=$host;port=$port;dbname=$dbname;charset=utf8";

try {
  $pdo = new PDO($dsn, $username, $password);
  
  // Set the PDO error mode to exception
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  echo 'Connected to the database';

} catch(PDOException $e) {
  echo $e->getMessage();
  echo 'Failed to connect to database';
}