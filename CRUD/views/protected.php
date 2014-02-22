<?php
//protected data view

foreach($data as $d){
    echo " <b>Height:</b> ";
    echo $d["height"];
    echo " <b>Description:</b> ";
    echo $d["description"];
    echo " <a href='?action=update&id=".$d["id"]."'>Update</a>";
    echo " <a href='?action=delete&id=".$d["id"]."'>Delete</a>";
    echo "<br>";
}
