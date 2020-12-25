<?php
$data = $_GET['id'];

require 'dbconf.php';
global $pdo;
$query = $pdo->query("SELECT `task` FROM `tasks` WHERE `id`= '$data'");
while($tmp = $query->fetch(PDO::FETCH_OBJ)) {
    echo '<b>'.$tmp->task.'</b>';
}

