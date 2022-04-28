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
    <link rel="stylesheet" href="../includes/css/style.css">
    <title>Delete confirm | Chess online</title>
</head>
<body>
    <div class="delete-account">
        <p>You sure you want to delete your account?</p>
        <div>
            <form style="float:left;" action="index.php">
                <input type="submit" value="No">
            </form>
            <form action="../includes/settings/delete.php" method="post">
                <input type="submit" value="Delete">
            </form>
        </div>
    </div>
</body>
</html>