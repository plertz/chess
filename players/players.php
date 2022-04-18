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
    <script src="../includes/js/search.js" defer></script>
    <LINK href="../includes/css/style.css" rel="stylesheet" type="text/css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>players | Chess Online</title>
</head>
<body>
    <?php
    include "../includes/players/searchbar.php";
    ?>
</body>
</html>