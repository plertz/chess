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
    <link rel="stylesheet" type="text/css" href="../includes/css/style.css">
    <script src="../includes/js/navbar.js" defer></script>
    <title>Change Password | Chess online</title>
</head>
<body>
    <form class="change-password" action="../includes/settings/update_password.php" method="post">
        <label for="old_password">Old Password</label>
        <input type="password" name="old_password" id="old_password">
        <label for="new_password">New Password</label>
        <input type="password" name="new_password" id="new_password">
        <label for="confirm_password">Confirm Password</label>
        <input type="password" name="confirm_password" id="confirm_password">
        <input type="submit" name="submit" value="Change Password">
    </form>

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
                    <li><a href="../game/pvp">PvP Online</a></li>
                    <li><a href="../game/offline">Pvp Offline</a></li>
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
</body>
</html>