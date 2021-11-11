<!DOCTYPE html>
<html>
    <head>
        <?php
        include "../includes/head.php";
        include "signup/head.php";
        include "../includes/auth.php";
        $loggedIn = auth("../");
        if ($loggedIn) {
            header("Location: ../index.php");
        }
        ?>
    </head>
    <body>
        <div id="auth-wrapper">
            <?php
                include "signup/form.php";
            ?>
        </div>
    </body>
</html>