<?php

//pulls the $data from the viewModel

foreach($data as $d){

    echo $d["name"];
    echo " <a href=?action=Trees&id=".$d["id"].">Information</a>";
    echo "<br>";
}