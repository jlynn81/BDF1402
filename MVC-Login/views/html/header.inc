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

<h1>Plants</h1>
<p id="intro">Plant Information Database</p>

<!--<div id="trees">--><?php //echo  "<a href='views/html/tree_details.inc?action=index.php'>Trees</a>"; ?><!--</div>-->
<!--<div id="flowers">--><?php //echo "<a href='views/html/flower_details.inc?action=index.php'>Flowers</a>"; ?><!--</div>-->

<p>Please login with a Username and Password</p>

<form action="<?php echo $pageTitle; ?>" method="post">
    <label for="username">Username</label>
    <input type="text" name="username" id="username" maxlength="20" size="20"/><br/>
    <label for="password">Password</label>
    <input type="password" name="password" id="password" maxlength="20" size="20"/><br />
    <input type="submit"/>
</form>







