<?php

//retrieve data from the viewModel

echo "<center>";
foreach($data as $d){
    echo " <b>User Name:</b>";
    echo $d['username'];
    echo " <b>Email Address:</b>";
    echo $d['email'];
    echo " <b>Address:</b>";
    echo $d['address'];
    echo " <b>Phone Number:</b>";
    echo $d['phone'];
    echo "<br>";
}

echo "</center>";
?>