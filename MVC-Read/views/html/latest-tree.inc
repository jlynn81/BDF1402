<?php

$lastTree = '';

foreach ($rows as $num => $row){

    if($lastTree !== $row['Height']) {
        echo "<h2>${row['Name']}:</h2>";
        echo "<h3>${row['Height']}</h3>";
    }
    echo "<li>${row['Description']}</li>";
    $lastTree = $row['Height'];


}


