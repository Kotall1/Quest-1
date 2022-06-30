<?php
include("form.php");
session_start();

$_SESSION["name"] = "Sam";
$_SESSION["age"] = 27;
echo "Данные в сессию сохранены";


