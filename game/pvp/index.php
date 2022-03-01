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
        echo $_SESSION["username"];
        ?>
        <br>
        <button onclick="search_opponent('../../includes/game/search_opponent.php').then(data => {console.log(data)});">Search</button> -->
    </body>
</html>