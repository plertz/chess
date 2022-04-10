<!DOCTYPE html>
<html>
    <head>
        <link type="text/css" rel="stylesheet" href="includes/css/style.css">
        <script type="text/javascript" src="includes/js/slider.js" defer></script>
        <script type="text/javascript" src="includes/js/navbar.js" defer></script>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Chess online | home</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <?php
            include "includes/general/auth.php";
            $loggedIn = auth("");
            if (!$loggedIn) {
                include "includes/general/not_logged_in_homepage.php";
            }
            else{
                include "includes/general/homepage.php";
            }
        ?>
    </body>
</html>