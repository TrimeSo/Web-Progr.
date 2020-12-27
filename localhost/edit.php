<?php
    $data = $_GET['change'];

    if ($data != '' or empty($data)) {

        header('Location: ./index.php');
    }

    require 'dbconf.php';
    $id = $_GET['id'];
    $sql = "UPDATE `tasks` SET `task` = ? WHERE `tasks`.`id` = ?";
    global $pdo;
    $query = $pdo->prepare($sql);
    $query->execute([$data, $id]);