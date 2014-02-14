<?php


$lastTree = '';

foreach ($rows as $num => $row){

    if($lastTree !== $row['Name']) {
        echo "<h2>${row['Name']}</h2>";

    }
    echo "<li>${row['Height']}</li>";
    echo "<li>${row['Description']}</li>";
    $lastTree = $row['Height'];


}


