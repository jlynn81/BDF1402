<?php

//pulls the $data from the viewModel

foreach($data as $d){

    echo $d["name"];
    echo " ";

    echo " <a href=?action=tree_details&id=".$d["id"].">Tree Information</a>";
    echo "<br>";
}