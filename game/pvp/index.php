<!DOCTYPE html>
<html>
    <head>
        <?php
            include "../../includes/general/auth.php";
            $loggedIn = auth("../../");
            if (!$loggedIn) {
                header("Location: ../../auth/login.php");
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
        <!-- <button onclick="search_opponent('game/search_opponent.php').then(data => {console.log(data)});">Search</button> -->
        <!-- <button onclick="start_connection('../../include/game/connection.php').then(data => {console.log(data)});">connect</button> -->
    </body>
</html>