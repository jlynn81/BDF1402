<?php

session_start();

unset($_SESSION['userInfo']);

session_destroy();

//sends the user back to the home page
header('Location: auth.php');
exit;