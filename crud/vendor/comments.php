<?php
require_once "../config/connect.php";
$comments = $_POST["comments"];
$id = $_POST["id"];

mysqli_query($connect , "INSERT INTO `comments` (`id`, `product_id`, `comment`) VALUES (NULL, '$id', '$comments');");

header('Location: ../comments.php?id=' . $id);
?>