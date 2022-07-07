<?php
session_start();

$_SESSION['name'] = $_POST['username'];

header('location: index.php');

