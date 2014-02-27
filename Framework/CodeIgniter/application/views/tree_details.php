<div id="treeDisc">

<?php

//echo "<center>";
foreach($data as $d){

    echo "<table>";

    echo "<b>Name:</b> ";
    echo $d["name"];
    echo "<br>";
    echo " <b>Height:</b> ";
    echo $d["height"];
    echo "<br>";
    echo " <b>Description:</b> ";
    echo $d["description"];
    echo "<br>";

    echo "</table>";
}
//echo "</center>";
?>

</div>