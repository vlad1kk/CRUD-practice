<?php
require_once "config/connect.php";
$goods_id = $_GET['id'];
$good = mysqli_query($connect, "SELECT * FROM `goods` WHERE `id` = '$goods_id'");
$good = mysqli_fetch_assoc($good);

$com = mysqli_query($connect, "SELECT * FROM `comments`");
$com = mysqli_fetch_all($com);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Перегляд товару</title>
</head>

<body>
    <a href="http://localhost:8888/crud/index.php">Головна</a>

    <hr>

    <h3><?= $good['title'] ?></h3>
    <p><?= $good['description'] ?></p>
    <p><b>Ціна: </b><?= $good['price'] ?></p>

    <hr>

    <h3>Добавити коментар</h3>
    <form action="vendor/comments.php" method="post">
        <input type="hidden" name="id" value="<?= $goods_id ?>">
        <textarea name="comments" placeholder="Коментар"></textarea>
        <button type="submit">Відправити</button>
    </form>

    <hr>
    <h3>Коментарі:</h3>
    <?php
    foreach ($com as $cmt) {
    ?>
        <ul>
            <li><?= $cmt[2] ?></li>
        </ul>
    <?php
    }
    ?>
</body>

</html>