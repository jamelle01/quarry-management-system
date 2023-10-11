<?php
$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'quarry';

// todo: create database using the dbname or create on your own change the dbname
// create table named posts
// use this query to create the table:
/*
CREATE TABLE posts (
id INT AUTO_INCREMENT PRIMARY KEY,
title VARCHAR(255) NOT NULL,
content TEXT NOT NULL
);
 */

try {
    // pod is same with mysqli
    $db = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
