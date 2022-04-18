<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    include "../includes/general/auth.php";
    $loggedIn = auth("../");
    if (!$loggedIn) {
        header("Location: ../auth/login");
    }
    include "../includes/settings/data.php";
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Settings | Chess Online</title>
    <link rel="stylesheet" href="../includes/css/style.css">
    <script src="../includes/js/navbar.js" defer></script>
</head>
<body>
    <div class="settings-wrapper">
        <div class="profile-pic">
            <img src="../includes/icon/<?=$icon?>" width="100" alt="profile pic">
        </div>
        <h1 class="details-name"><?=$username?></h1>
        <table>
            <tr>
                <th>Online matches</th>
                <th>Online wins</th>
            </tr>
            <tr>
                <td><?=$online_matches?></td>
                <td><?=$online_wins?></td>
            </tr>
            <tr>
                <th>Local matches</th>
                <th>Local wins (white)</th>
            </tr>
            <tr>
                <td><?=$local_matches?></td>
                <td><?=$local_wins?></td>
            </tr>
            <tr>
                <th>Bot matches</th>
                <th>Bot wins</th>
            </tr>
            <tr>
                <td><?=$bot_matches?></td>
                <td><?=$bot_wins?></td>
            </tr>
        </table>

        <form action="update_user_data.php" method="post">
            <input name="email" type="text" value="<?=$email?>" placeholder="email">
            <select name="gender">
                <?php
                switch ($gender) {
                    case 'male':
                        echo '<option value="1" >male</option><option value="2" >female</option><option value="3" >other</option>';
                        break;
                    case 'female':
                        echo '<option value="2" >female</option><option value="1" >male</option><option value="3" >other</option>';
                        break;
                    case 'other':
                        echo '<option value="3" >other</option><option value="2" >female</option><option value="1" >male</option>';
                        break;
                }
                ?>
            </select>
            <input style="background-color: #50026b" type="submit" value="Change user data">
        </form>

        <div class="settings-a">
            <a style="background-color: red" href="delete_account.php">Delete Account</a>
            <a style="background-color: #022f6b" href="update_password.php">Change Password</a>
            <a style="background-color: #026b17" href="update_image.php">Change image</a>
        </div>
    </div>
    
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