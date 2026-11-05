<?php
echo "PHP: " . phpversion() . "<br>";

try {
    $pdo = new PDO('pgsql:host=postgres;dbname=postgres', 'postgres', 'postgres');
    echo "PostgreSQL: " . $pdo->query('SELECT version()')->fetchColumn() . "<br>";
} catch (Exception $e) { echo "PostgreSQL: error<br>"; }

try {
    $pdo = new PDO('mysql:host=mysql;dbname=mysql', 'root', '');
    echo "MySQL: " . $pdo->query('SELECT VERSION()')->fetchColumn() . "<br>";
} catch (Exception $e) { echo "MySQL: error<br>"; }

try {
    $redis = new Redis();
    $redis->connect('redis', 6379);
    echo "Redis: " . $redis->info()['redis_version'] . "<br>";
} catch (Exception $e) { echo "Redis: error<br>"; }
?>
