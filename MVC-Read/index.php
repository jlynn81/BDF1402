

<?php

require_once "Trees/TreeModel.php";
require_once "Trees/db.php";
require_once "Trees/TreeView.php";


$model = new TreeModel(DSN, USER, PASS);

$rows = $model->getLatestTree();
$view = new TreeView();
$view->showHeader('Trees');

$lastTree = '';

foreach ($rows as $num => $row){
    if($lastTree !== $row['Height']) {
            echo "<h2>${row['Name']}: ${row['Height']}</h2>";
    }
    echo "<li>${row['Description']}</li>";
    $lastTree = $row['Height'];

}

?>

</body>
</html>





