<!DOCTYPE html>
<html lang="en">
<head>
<?php
        include "../includes/general/auth.php";
        $loggedIn = auth("../");
        if (!$loggedIn) {
            header("Location: ../auth/login");
        }
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete confirm | Chess online</title>
</head>
<body>
    <p>You sure you want to delete your account?</p>
    <form action="../includes/settings/delete.php" method="post">
        <input type="submit" value="Delete">
    </form>
</body>
</html>