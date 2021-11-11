<!DOCTYPE html>
<html>
    <head>
        <?php
            include "../includes/head.php";
            include "login/head.php";
            include "../includes/auth.php";
            $signedIN =auth("../");
            if ($signedIN) {
                header("Location: ../index.php");
            } 
        ?>
    </head>
    <body>
        <div id="auth-wrapper">
            <?php
                include "login/form.php";
            ?>
        </div>
    </body>
</html>