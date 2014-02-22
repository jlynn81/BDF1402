<?php

//pulls the $data from the viewModel

foreach($data as $d){

    echo $d["NAME"];
    echo " ";

    echo " <a href=?action=treeDetails&id=".$d["NAME"].">Trees</a>";
    echo "<br>";
}