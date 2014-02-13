<?php

$lastTree = '';

foreach ($rows as $num => $row){
    if($lastTree !== $row['Height']) {
        echo "<h2>${row['Name']}: ${row['Height']}</h2>";
    }
    echo "<li>${row['Description']}</li>";
    $lastTree = $row['Height'];

}