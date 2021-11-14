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
        <br>
        <button onclick="search_opponent('game/search_opponent.php').then(data => {console.log(data)});">Search</button>
    </body>
</html>