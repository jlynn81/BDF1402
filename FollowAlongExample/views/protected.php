<?php

//Protected View

echo "<center>";

foreach($data as $d){

    echo ' <b>Email:</b> ';
    echo $d['email'];

    echo '<b>Phone:</b> ';
    echo $d['phone'];

    echo ' <br><b>Address:</b> ';
    echo $d['address'];

    echo " <a href=''>Update</a>";
    echo " <a href=''>Delete</a>";
    echo "<br>";
}
echo "</center>";