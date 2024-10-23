<?php

$host = 'd123460.mysql.zonevs.eu';
$db   = 'd123460_booksdbandrusen2idis';
$user = 'd123460_kasutaja';
$pass = 'T3re_raamatupood';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];
$pdo = new PDO($dsn, $user, $pass, $options);