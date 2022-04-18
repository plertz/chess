<?php
    $user_id = $_SESSION["user_id"];
    $db = new PDO("sqlite:../database/chess");
    $sql = "SELECT username, icon, gender, email, online_matches, online_wins, local_matches, local_wins, bot_matches, bot_wins FROM users JOIN icon ON icon.user_id = users.user_id JOIN user_stats ON user_stats.user_id = users.user_id JOIN user_info ON user_info.user_id = users.user_id  LEFT JOIN gender ON gender.gender_id = user_info.gender_id WHERE users.user_id = $user_id LIMIT 1";
    $result = $db->query($sql);
    foreach ($result as $row) {
        $username = $row['username'];
    }
    $db = null;
?>