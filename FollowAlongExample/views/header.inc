<center>
    <p><b>Welcome to my Contacts</b></p>
    <p><a href="/index.php?action=">Home</a> |

    <?php
    if($_SESSION['loggedin'] == 1){
        echo "<a href='/index.php?action=logout'>Logout</a> </p>";
        echo "<a href='/protector.php?action='>Protected</a> <a href='/protector.php?action=add'>Add a Contact</a></p>";
    }else{
        echo "<a href='/index.php?action=login'>Login</a></p>";
    }

    ?>



</center>