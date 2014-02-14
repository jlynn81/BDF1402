<?php

$lastFlower = '';

foreach ($row as $num => $row) {
    if ($lastFlower !== $row['COLOR']) {
        echo "<h2>{$row['NAME']}: ${row['COLOR']}</h2>";
    }

    echo "<li>${row['DESCRIPTION']}</li>";
    $lastFlower = $row['COLOR'];
}