<?php
//retrieve data from the viewModel

echo "<center>";

foreach($data as $d){

    //display data on the screen
    echo $d["firstname"];
    echo " ";
    echo $d["lastname"];
    echo " <a href=?action=users&userId=".$d["userId"].">More Information</a>";
    echo "<br>";
}

echo "</center>";

?>