<?php $pageTitle = "Request Page";
include "inc/header.php";
include "inc/linkstyler.php";
?>

<p>

    <?php
    if (isset ($_REQUEST["name"]))
        echo "Post 'Test' is: " . $_REQUEST ['name'] . "<br>";
    else
        echo "Post 'test' is empty!<br>";
    ?>
</p>
</body>
</html>