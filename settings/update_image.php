<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    include "../includes/general/auth.php";
    $loggedIn = auth("../");
    if (!$loggedIn) {
        header("Location: ../auth/login");
    }
    $user_id = $_SESSION["user_id"];
    if (isset($_FILES['file'])) {
        $fileContent = file_get_contents($_FILES['file']['tmp_name']);
        $info = pathinfo($_FILES['file']['name']);
        $ext = $info['extension'];
        $newname = $user_id. "." .$ext; 

        $target = "../includes/icon/" . $newname;
        move_uploaded_file( $_FILES['file']['tmp_name'], $target);
        $db = new PDO("sqlite:../database/chess");
        $sql = "UPDATE icon SET icon = '$newname' WHERE user_id = $user_id";
        $db->exec($sql);
        $db = null;
        header("Location: index.php");
    }
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../includes/css/style.css">
    <script src="../includes/js/navbar.js" defer></script>
    <title>Change icon | Chess online</title>
</head>
<body>
    <form class="change-img" action="update_image.php" method="post" enctype="multipart/form-data" accept="image/jpg, image/png, image/gif">
        <h1> Change profile image</h1>
        <h5>Images only</h5>    
        <input name="file" type="file">
        <input type="submit" value="submit">
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
</body>
</html>