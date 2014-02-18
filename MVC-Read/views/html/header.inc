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
<div id="trees"><?php echo  "<a href='views/html/tree_details.inc?action=index.php'>Trees</a>"; ?></div>
<div id="flowers"><?php echo "<a href='views/html/flower_details.inc?action=index.php'>Flowers</a>"; ?></div>


<?php
//if($_SESSION['success'] =1){
//    echo "<a href='/index.php?action=logout'>Log Out</a>";
//}else{
//    "<a href='index.php?action=login'>Login</a>";
//}
//?>




