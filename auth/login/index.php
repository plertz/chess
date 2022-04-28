<!DOCTYPE html>
<html>
    <head>
        <?php
            include "../../includes/general/head.php";
            include "../../includes/login/head.php";
            include "../../includes/general/auth.php";
            $signedIN = auth("../../");
            if ($signedIN) {
                header("Location: ../../");
            } 
        ?>
    </head>
    <body>
        <div id="auth-wrapper">
            <?php
                include "../../includes/login/form.php";
            ?>
        </div>
    </body>
</html>