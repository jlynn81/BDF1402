<?php

$lastFlower = '';

foreach ($rows as $num => $row){
    if($lastFlower !== $row['Color']) {
        echo "<h2>${row['Name']}</h2>";
        echo "<h3>${row['Color']}</h3>";
    }
    echo "<li>${row['Description']}</li>";
    $lastTree = $row['Color'];

}
