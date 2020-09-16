<?php

session_start();
if(!$_SESSION['login']) {
    header('localtion: login_form.php');
}

echo "home";

?>

<a href="logout.php">logout</a>