<?
	echo "<center>";
	foreach($data as $d){

		echo $d["name"];
		echo " <a href=?action=Clients&clientID=".$d["clientID"].">More Details</a>";
		echo "<br>";

	}

	echo "</center>";
?>