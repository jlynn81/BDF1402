<?php

//pulls the $data from the viewModel

foreach($data as $d){

    echo $d["name"];
    echo " ";

    echo " <a href=?action=Trees&treeId=".$d["treeId"].">Information</a>";
    echo "<br>";
}