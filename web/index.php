<?php
session_start();


if(!isset($_SESSION['name'])) {
    include("form.php");

}else {
    echo "<hr>Привет {$_SESSION['name']}!<hr>";
?>
    <a href="exit.php">Завершить сессию</a>
<?php
}
?>


