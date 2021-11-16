<!DOCTYPE html>
<html>
    <head>
        <?php
        include "../../includes/general/head.php";
        include "../../includes/signup/head.php";
        include "../../includes/general/auth.php";
        $loggedIn = auth("../../");
        if ($loggedIn) {
            header("Location: ../../");
        }
        ?>
    </head>
    <body>
        <div id="auth-wrapper">
            <?php
                include "../../includes/signup/form.php";
            ?>
        </div>
    </body>
</html>