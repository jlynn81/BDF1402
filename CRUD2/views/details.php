<?
	echo "<center>";
	foreach($data as $d){

		echo " <b>User Name:</b> ";
		echo $d["userName"];
		echo " <br><b>Password:</b> ";
		echo $d["password"];
		echo " <br><b>Name:</b> ";
		echo $d["name"];
		echo " <br><b>Organization:</b> ";
		echo $d["organization"];
		echo " <br><b>Email:</b> ";
		echo $d["email"];
		echo " <br><b>Phone:</b> ";
		echo $d["phone"];
		echo "<br>";
	}
	echo "</center>";
?>