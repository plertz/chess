<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        include "../../includes/general/auth.php";
        $loggedIn = auth("../../");
        if (!$loggedIn) {
            header("Location: ../../auth/login");
        }
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../../includes/css/style.css">
    <script src="../../includes/js/navbar.js" defer></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online |Chess online</title>
</head>
<body>
    <h1 style="color: white; text-align: center;">Sorry, this game mode is currently not available:(</h1>

    <div class="nav-background">
    </div>
    <div class="show-nav">
        <span class="span-nav">
            >
        </span>
    </div>
    <nav class="nav">
        <div class="account-header">
        <p><a href="../../settings/">Account</a></p>
        </div>

        <ul>
        <li>
            <h1>General</h1>
            <ul>
                <li><a href="../../">Home</a></li>
            </ul>
        </li>
        <li>
            <h1>Game</h1>
            <ul>
                <li><a href="../pvp">PvP online</a></li>
                <li><a href="../local">Pvp local</a></li>
                <li><a href="../bot/">Bot</a></li>
            </ul>
        </li>
        <li>
            <h1>Stats</h1>
            <li><a href="../../players/players.php">Players</a></li>
            <li><a href="../../leaderboard/">Leaderboard</a></li>
        </li>
        </ul>
    </nav>
</body>
</html>