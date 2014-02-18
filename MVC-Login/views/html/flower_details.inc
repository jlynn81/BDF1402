<?php

$lastFlower = '';

foreach ($rows as $num => $row){
    if($lastFlower !== $row['Color']) {
        echo "<h2>${row['Name']}</h2>";
    }
    echo "<li>${row['Color']}</li>";
    echo "<li>${row['Description']}</li>";
    $lastFlower = $row['Color'];

}
?>