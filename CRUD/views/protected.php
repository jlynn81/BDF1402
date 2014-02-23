<div id="treeDisc">

<?php
//protected data view

foreach($data as $d){
    echo " <b>Name: </b>";
    echo $d["name"];
//    echo " <b>User Name:</b>";
//    echo $d["user_name"];
//    echo "<b>User Password</b>";
//    echo $d["user_password"];
    echo " <b>Tree Height: </b> ";
    echo $d["height"];
    echo " <b>Tree Description: </b> ";
    echo $d["description"];
    echo " <a href='?action=update&id=".$d["id"]."'>Update</a>";
    echo " <a href='?action=delete&id=".$d["id"]."'>Delete</a>";
    echo "<br>";
}
?>
</div>