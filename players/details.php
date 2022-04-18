<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
        include "../includes/general/auth.php";
        $loggedIn = auth("../");
        if (!$loggedIn) {
            header("Location: ../auth/login");
        }
        if (!$_GET["player"]) {
            header("Location: ../error.php");
        }
        $user = $_GET["player"];
        ?>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>details | Chess Online</title>
        <script>
            document.title = "<?=$_GET["player"]?> | Chess Online";
        </script>
    </head>
        
    <body>
        <?php
        include "../includes/players/details.php"
        ?>
    </body>
</html>