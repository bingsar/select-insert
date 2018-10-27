<?php
$db = 'netology';
$user = 'root';
$pass = '';
$host = 'localhost';

$pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);