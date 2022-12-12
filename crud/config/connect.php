<?php
$connect = mysqli_connect("localhost", "root", "root", "crud");
    if(!$connect){
        die("Помилка підключення до БД");
    }
?>