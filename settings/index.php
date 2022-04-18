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
    $user_id = $_SESSION["user_id"];
    $db = new PDO("sqlite:../database/chess");
    $sql = "SELECT username, icon, gender, email, online_matches, online_wins, local_matches, local_wins, bot_matches, bot_wins FROM users JOIN icon ON icon.user_id = users.user_id JOIN user_stats ON user_stats.user_id = users.user_id JOIN user_info ON user_info.user_id = users.user_id  LEFT JOIN gender ON gender.gender_id = user_info.gender_id WHERE users.user_id = $user_id LIMIT 1";
    $result = $db->query($sql);
    foreach ($result as $row) {
        $username = $row['username'];
    }
    $db = null;
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Settings | Chess Online</title>
    <link rel="stylesheet" href="../includes/css/style.css">
</head>
<body>
    <div class="settings-wrapper">
    <!-- <div class="profile-pic">
        <img src="../includes/icon/<?=$icon?>" width="100" alt="profile pic">
    </div> -->
    <?=$username?>
    </div>
</body>
</html>