<?php
// Задание 2
// Подключиться к созданной выше базе и выбрать из неё названия ингридиентов, которые указаны в граммах.

require 'data_bd.php';
try {
  $pdo = new PDO($dsn, $user, $password);
} catch(PDOException $e) {
  echo 'Нет подключения к базе данных' . ' ' .  $e->getMessage();
}


$sql = 'SELECT DISTINCT title FROM Ingredients_table WHERE units = "г"';

$stmt = $pdo->query($sql);

while ($row = $stmt->fetch())
{
    echo $row['title'] . "<br>";
}
echo "<br>";
