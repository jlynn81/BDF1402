<?php

//Protected View

echo "<center>";

foreach($data as $d){

    echo ' <b>Email:</b> ';
    echo $d['email'];

    echo '<b>Phone:</b> ';
    echo $d['phone'];

    echo ' <b>Address:</b> ';
    echo $d['address'];

    echo " <a href='?action=update&id=".$d("id")."'>Update</a>";
    echo " <a href='?action=delete&id=".$d("id")."'>Delete</a>";
    echo "<br>";
}
echo "</center>";