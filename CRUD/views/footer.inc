<?php
if($_SESSION["successful"] == 1){
    echo " <a href='index.php?action=logout'>Log Out</a> | ";
    echo " <a href='protected.php?action='>Protected</a> | <a href='protected.php?action=add'>Add a Tree</a></p>";
}else{
    echo " <a href ='index.php?action=login'>Login</a></p>";
}
?>


</body>



<footer>



    <footer>Created by Jennifer Brown | BDF1402 | @February 2014</footer>

</footer>

</html>