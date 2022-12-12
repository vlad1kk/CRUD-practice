<?php
    require_once "config/connect.php";
    $goods_id = $_GET['id'];
    $good = mysqli_query($connect, "SELECT * FROM `goods` WHERE `id` = '$goods_id'");
    $good = mysqli_fetch_assoc($good);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Оновити товар</title>
</head>
<body>

<h2>Оновити товар</h2>
    <form action="vendor/update.php" method="post">
        <input type="hidden" name="id" value="<?= $goods_id ?>">
        <p>Назва</p>
        <input type="text" name="title" value="<?=$good['title'] ?>">
        <p>Опис</p>
        <textarea name="description"> <?=$good['description'] ?></textarea>
        <p>Ціна</p>
        <input type="number" name="price" value="<?=$good['price'] ?>">
        <button type="submit">Оновити</button>
    </form>
</body>
</html>