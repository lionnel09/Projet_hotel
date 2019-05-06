<?php ?>
<p>au revoir 
    <?php
    print $_SESSION['login'];
    session_unset();


    session_destroy();
    header("refresh: 0.005 url=index.php");
    ?>
</p>

