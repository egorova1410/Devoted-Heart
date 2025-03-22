<?php
session_start();

$link = new mysqli("localhost", "root", "root", "devotedHeart");

if (!$link) {
    die("Ошибка подключения БД");
}
