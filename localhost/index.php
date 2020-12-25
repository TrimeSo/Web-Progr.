<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Туду лист</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">    
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <div class="container">
    <h1>ToDo:</h1>
    <form action="addtodo.php" method="GET">

    <input class="form-control" type="text" name="list" id ="list"
      placeholder="Введите текст заметки..." ><br><br>

    <button class="btn btn-success" type="submit" name="send"> Добавить </button>
    </form>

    <?php
        require 'dbconf.php';
        echo '<ul>';
        global $pdo;
        $query = $pdo->query('SELECT * FROM `tasks` ORDER BY `id` DESC');
        while($tmp = $query->fetch(PDO::FETCH_OBJ)) {
        echo '<li><b>'.$tmp->task.'</b><a href="./del.php?id='.$tmp->id.'"><br><button class="btn btn-danger"> Удалить</button></a>
        <a href ="./taskdone.php?id='.$tmp->id.'"><button class = "btn btn-success"> Выполнить</button></a>
        <a href ="./taskchange.php?id='.$tmp->id.'"><button class = "btn btn-primary"> Изменить</button></a>
        </li>';
        }
        echo '</ul>';
    ?>
    </div>
</body>
</html>