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
    <script type="text/javascript" src="../includes/js/navbar.js" defer></script>
    <link href="../includes/css/style.css" rel="stylesheet" type="text/css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>players | Chess Online</title>
</head>
<body>
    <div class="nav-background">
    </div>
    <div class="show-nav">
        <span class="span-nav">
            >
        </span>
    </div>
    <nav class="nav">
        <div class="account-header">
            <p><a href="../settings/">Account</a></p>
        </div>
        
        <ul>
            <li>
                <h1>General</h1>
                <ul>
                    <li><a href="../">Home</a></li>
                </ul>
            </li>
            <li>
                <h1>Game</h1>
                <ul>
                    <li><a href="../game/pvp">PvP online</a></li>
                    <li><a href="../game/local">Pvp local</a></li>
                    <li><a href="../game/bot/">Bot</a></li>
                </ul>
            </li>
            <li>
                <h1>Stats</h1>
                <li><a href="../players/players.php">Players</a></li>
                <li><a href="../leaderboard/">Leaderboard</a></li>
            </li>
        </ul>
    </nav>
    <?php
    include "../includes/players/searchbar.php";
    ?>
</body>
</html>