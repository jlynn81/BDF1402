<div id="treeDisc">

<?php
//protected data view

foreach($data as $d){
    echo "<table>";
    echo " <b>Name: </b>";
    echo $d["name"];
    echo "<br>";
//    echo " <b>User Name:</b>";
//    echo $d["user_name"];
//    echo "<b>User Password</b>";
//    echo $d["user_password"];
    echo " <b>Height: </b> ";
    echo $d["height"];
    echo "<br>";

    echo " <b>Description: </b> ";
    echo $d["description"];
    echo "<br>";

    echo " <a href='?action=update&id=".$d["id"]."'>Update</a>";
    echo "<break>";
    echo " <a href='?action=delete&id=".$d["id"]."'>Delete</a>";
    echo "</table>";
}
?>
</div>