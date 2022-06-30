<?php
declare(strict_types=1);

include("form.html");
session_start();

$_SESSION["name"] = "Sam";
$_SESSION["age"] = 27;
echo "Данные в сессию сохранены";


