<?php

echo "<center>";
foreach($data as $d){

    echo "<b>Name:</b> ";
    echo $d["name"];
    echo "<b>Username:</b> ";
    echo $d["user_name"];
    echo " <b>Height:</b> ";
    echo $d["height"];
    echo " <b>Description:</b> ";
    echo $d["description"];
    echo "<br>";
}
echo "</center>";
?>