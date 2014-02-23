<?php
//protected data view

foreach($data as $d){
    echo " <b>Name:</b>";
    echo $d["name"];
    echo " <b>User Name:</b>";
    echo $d["user_name"];
    echo "<b>User Password</b>";
    echo $d["user_password"];
    echo " <b>Height:</b> ";
    echo $d["height"];
    echo " <b>Description:</b> ";
    echo $d["description"];
    echo " <a href='?action=update&treeId=".$d["treeId"]."'>Update</a>";
    echo " <a href='?action=delete&treeId=".$d["treeId"]."'>Delete</a>";
    echo "<br>";
}
