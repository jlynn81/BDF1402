<?
echo "<center><br>";
foreach($data as $d){
	echo '<div style="background-color:yellow; width:70%; -webkit-box-shadow: 2px 2px 1px 3px #8C8EA3; box-shadow: 2px 2px 1px 3px #8C8EA3;">';
	echo ' <b>User Name:</b> ';
	echo $d['userName'];
	echo '&nbsp;&nbsp; <b>Password:</b> ';
	echo $d['password'];
	echo ' <br><b>Name:</b> ';	
	echo $d['name'];
	echo '&nbsp;&nbsp; <b>Organization:</b> ';
	echo $d['organization'];
	echo ' <br><b>Email:</b> ';
	echo $d['email'];
	echo '&nbsp;&nbsp; <b>Phone:</b> ';
	echo $d['phone'];
	echo " <a href='?action=update&clientID=".$d["clientID"]."'>Update</a>";
	echo " <a href='?action=delete&clientID=".$d['clientID']."'>Delete</a>";
	echo "</div><br>";
}
echo "</center>";
?>