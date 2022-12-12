<?php
    require_once "config/connect.php";
    $goods = mysqli_query($connect, "SELECT * FROM `goods`");
    $goods = mysqli_fetch_all($goods);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Товари</title>
</head>
<body>
    <table>
        <tr>
            <th>id</th>
            <th>Назва</th>
            <th>Опис</th>
            <th>Ціна</th>
            <th>&#9757;</th>
            <th>&#9998;</th>
            <th>&#10006;</th>
        </tr>
        <?php
        foreach($goods as $item){
            ?>
        <tr>
            <td><?= $item[0] ?></td>
            <td><?= $item[1] ?></td>
            <td><?= $item[2] ?></td>
            <td><?= $item[3] ?></td>
            <td><a href="comments.php?id=<?=$item[0] ?>">Перегляд</a></td>
            <td><a href="update.php?id=<?=$item[0] ?>">Оновити</a></td>
            <td><a href="vendor/delete.php?id=<?=$item[0] ?>">Видалити</a></td>
        </tr>
        <?php
        }
        ?>

    </table>


    <h2>Добавити новий товар</h2>
    <form action="vendor/create.php" method="post">
        <p>Назва</p>
        <input type="text" name="title">
        <p>Опис</p>
        <textarea name="description"></textarea>
        <p>Ціна</p>
        <input type="number" name="price">
        <button type="submit">Добавити</button>
    </form>
</body>
</html>
