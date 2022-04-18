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
        include "../includes/players/details.php";
        ?>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>details | Chess Online</title>
        <link rel="stylesheet" href="../includes/css/style.css">
        <script src="../includes/js/navbar.js" defer></script>
        <script>
            document.title = "<?=$_GET["player"]?> | Chess Online";
        </script>
    </head>
        
    <body>
        <?php
        echo $online_matches . "\n" . $online_wins . "\n" . $local_matches . "\n" . $local_wins . "\n" . $bot_matches . "\n" . $bot_wins;
        
        ?>
    </body>
</html>