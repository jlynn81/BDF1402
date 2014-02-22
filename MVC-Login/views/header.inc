<!DOCTYPE html>
<html lang="en">

<header>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <!--    Mobile viewport optimized: j.mp/bplateviewport-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

    <!--    CSS site stylization-->
    <link rel="stylesheet" type="text/css" href="CSS/styles.css"/>

    <!--    Web font for site-->
    <link href='http://fonts.googleapis.com/css?family=Ledger' rel='stylesheet' type='text/css'>

    <title>Plants</title>

</header>

<body>

<h1>Tree Types</h1>

<p><b>Welcome to a selection of different trees</b></p>
<p><a href="?action=">Home</a>

<?php
if($_SESSION['successful'] == 1){//PDF has 2 "=" signs and makes it break.
    echo "<a href='index.php?action=logout'>Log Out</a></p> ";
    echo " <a href='protected.php?action='>Protected</a></p>";
}else{
    echo "<a href ='index.php?action=login'>Login</a></p>";
}
?>
