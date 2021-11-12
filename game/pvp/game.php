<!DOCTYPE html>
<html>
    <head>
        <?php
            include "../../includes/auth.php";
            $loggedIn = auth("../../");
            if (!$loggedIn) {
                header("Location: ../../auth/login.php");
            }
            include "../../includes/head.php";
            include "game/head.php";
        ?>
    </head>
    <body>
    <?php 
    echo $_SESSION["username"];
    ?>
    </body>
</html>