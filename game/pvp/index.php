<!DOCTYPE html>
<html>
    <head>
        <?php
            include "../../includes/general/auth.php";
            $loggedIn = auth("../../");
            if (!$loggedIn) {
                header("Location: ../../auth/login");
            }
            include "../../includes/general/head.php";
            include "../../includes/game/head.php";
        ?>
    </head>
    <body>
        <?php 
        echo $_SESSION["user_id"];
        ?>
    </body>
</html>