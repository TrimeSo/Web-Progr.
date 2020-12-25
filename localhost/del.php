<?php
require 'dbconf.php';
$id = $_GET['id'];
$sql = 'DELETE FROM `tasks` WHERE `id` = ?';
global $pdo;
$query = $pdo->prepare($sql);
$query->execute([$id]);
header('Location: ./index.php');