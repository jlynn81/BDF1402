<?php

//pulls the $data from the viewModel

foreach($data as $d){

    echo $d["name"];
    echo " ";

    echo " <a href=?action=Trees&treeid=".$d["treeid"].">Information</a>";
    echo "<br>";
}