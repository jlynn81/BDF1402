<?php
//protected data view
echo "<center>";
foreach($data as $d){
    echo " <b>Height:</b> ";
    echo $d["height"];
    echo " <b>Description:</b> ";
    echo $d["description"];
    echo "<a href=''>Update</a>";
    echo "<a href=''>Delete</a>";
    echo "<br>";
}
echo "</center>";