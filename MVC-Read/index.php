<!DOCTYPE html>
<html>
<head><title>Plants of Love</title></head>

<body>

<h1>Trees</h1>
<p>Tree Information Database</p>

<?php
$dsn = "mysql:host=127.0.0.1;port=8889;dbname=BDF1402";

$db_user = "root";

$db_pass = "root";


    foreach ($rows as $num => $row){
        if($lastTree !== $row['Height']) {
            echo "<h2>${row['Name']}: ${row['Height']}</h2>";
        }
        echo "<li>${row['Description']}</li>";
        $lastTree = $row['Height'];

    }
}

?>

</body>
</html>





