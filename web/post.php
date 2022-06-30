<?php
session_start();
include("form.html");
$_SESSION["name"] = "Sam";
$_SESSION["age"] = 27;
echo "Данные в сессию сохранены";


var_dump($_SESSION);
