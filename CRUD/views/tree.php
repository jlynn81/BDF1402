<?php

//pulls the $data from the viewModel

foreach($data as $d){

    echo $d["NAME"];
    echo " <a href=?action=tree_details&id=".$d["id"].">Information</a>";
    echo "<br>";
}