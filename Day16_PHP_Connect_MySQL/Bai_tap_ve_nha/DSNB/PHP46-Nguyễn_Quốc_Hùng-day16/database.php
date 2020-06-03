<?php
const DB_DSN = 'mysql:host=localhost;dbname=QLNhanVien';
const DB_USERNAME = 'root';
const DB_PASSWORD = '';
try {
  $connection = new PDO(DB_DSN, DB_USERNAME, DB_PASSWORD);
}
catch (PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

?>