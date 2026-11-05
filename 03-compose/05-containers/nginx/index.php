<?php
echo "PHP: " . phpversion() . "<br>";

$pg = new PDO('pgsql:host=postgres;port=5432;dbname=postgres', 'postgres', 'postgres');
echo "PostgreSQL: " . $pg->query('SELECT version()')->fetchColumn() . "<br>";

$my = new PDO('mysql:host=mysql;port=3306;dbname=mysql', 'root', 'root');
echo "MySQL: " . $my->query('SELECT VERSION()')->fetchColumn() . "<br>";

$redis = new Redis();
$redis->connect('redis', 6379);
echo "Redis: " . $redis->info()['redis_version'] . "<br>";
?>
