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

    <title><?php echo $pageTitle; ?></title>

</header>

<body>

<h1><?php echo $pageTitle; ?></h1>
<p id="intro">Plant Information Database</p>

<div id="trees"><?php echo  "<a href='views/latest-tree.inc?action=index.php'>Trees</a>"; ?></div>
<div id="flowers"><?php echo "<a href='views/latest-flower.inc?action=index.php'>Flowers</a>"; ?></div>

<p>Please log in with your username and password</p>
<form action="<?php echo $pageTitle; ?>" method="post">
    <label for="username">Username</label>
        <input type="text" name="username" id="username" maxlength="20" size="20"/><br/>
    <label for="password">Password</label>
        <input type="password" name="password" id="password" maxlength="20" size="20"/><br />
    <input type="submit"/>
</form>






