<?php

$lastTree = '';

foreach ($rows as $num => $row){

//    $name = mysql_real_escape_string($row['Name']);
//    $height = mysql_real_escape_string($row['Color']);
//    $descr = mysql_real_escape_string($row['Description']);
//
//    if($lastTree !== $name) {
//        if ($lastTree !== '') {
//            echo "</div>";
//        }
//        echo "<h2>" . $name . "</h2>\n<div class='tree'>";
//        $lastTree = $name;
//    }
//    echo "a class='tree' href='plantDetails.php?id=" . $TREEID . "'></a>\n";

    if($lastTree !== $row['Height']) {
        echo "<h2>${row['Name']}:</h2>";
        echo "<h3>${row['Height']}</h3>";
    }
    echo "<li>${row['Description']}</li>";
    $lastTree = $row['Height'];

}


