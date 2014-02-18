<?php

//pulls the $data from the viewModel

foreach($data as $d){

    echo $d["NAME"];
    echo " ";

    echo " <a href=?action=tree_details&id=".$d["id"].">tree_details</a>";
    echo "<br>";
}